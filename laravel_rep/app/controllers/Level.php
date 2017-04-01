<?php

    class Level extends BaseController {

        public $restful = true;

        public function guide($level, $levelname=false){

            if(array_key_exists($level, Game::$levels) and $level <= Auth::user()->level){
                Session::put('cur_level', $level);
                
                if($levelname == null)
                    return Redirect::to('levels/' . $level . '/' . Game::$levels[$level][0]);
                    
                else if($levelname ==  Game::$levels[$level][0])
                    return View::make('levels/' .  Game::$levels[$level][1]);
                    
                else if(in_array($level, Game::$skip_levels, true))
                    return Level::answers($level, $levelname);
                    
                else if(array_key_exists($level, Game::$dowload_levels) and in_array($levelname, Game::$dowload_levels[$level], true))
                    return View::make('levels/' . str_replace(".","x",$levelname));
                    
                else
                    return View::make('levels/404');
            }
            else
                return View::make('levels/404');
        }





        public function answers($level, $answer = false){
            
            if(array_key_exists($level, Game::$levels) == 0)
                return Redirect::route('logout');

            if($answer == null)
                $answer = Input::get('answer');
			
            $dblevel = Auth::user()->level;
            if($level > $dblevel or $level < Game::$basicLevel or $level > Game::$finalLevel)
                return Redirect::route('logout');
                
            $success = Manager::attempt_capture($answer, $level);
            if($success === 0)
                return Redirect::route('logout');
                
            $validator = Checker::validate_answer($answer);
            if ($validator->fails())
                return Redirect::to("levels/" . $level);

            return Level::decide($level, $dblevel, $answer);
        }
        
        
        
        public function decide($level, $dblevel, $answer){
            
            $flag = 0;
            $next_level = 0;
            $level_max = 0;
            
            $answers = Answer::where('level', $level)->get();
            foreach ($answers as $dbanswer){
                if(Hash::check($answer, $dbanswer->answer)){
                    $next_level = $dbanswer->next_level;
                    $flag = 1;
                    break;
                }    
            }
            
            if($flag){
                $pos = array_search($next_level, Game::$levels_num)-1;
                if($pos < 0)
                    return Redirect::to('levels/' . $level);
                else
                    $level_max = Game::$levels_num[$pos];
            }
                
            if($flag and $dblevel < $level_max)
                return Redirect::to('levels/' . $level);
            
            else if($flag and $level < $dblevel and $level_max < $dblevel)
                return Redirect::to("levels/" . $next_level);
                
            else if($flag and $next_level < $level and $level_max < $dblevel)
                return Redirect::to("levels/" . $next_level);
                
            else if($flag and $level <= $dblevel and $level_max == $dblevel){
                Manager::capture_details($level, $next_level);
                return Redirect::to('levels/' . Auth::user()->level);
            }
            
            else
                return Redirect::to('levels/' . $level);
        }


}