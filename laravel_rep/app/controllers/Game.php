<?php 

    class Game{

        public static $basicLevel = 1;
        public static $finalLevel = 22;
        public static $congratsLevel = 23;
        public static $userwaitingtime = 30;    //time in seconds user has to wait if he is logged in already

        //its an array with for each level with 1st element as url and 2nd as file name respectively		
		
		public static $levels_num = array(0, 1, 1.3, 1.6, 2, 3, 4, 4.5, 5, 6, 7, 8, 9, 9.5, 10, 11, 12, 13, 13.3, 13.6, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24);         //specify an extra value at the end
		
		public static $lblevels_num = array(0, 1, 1.3, 1.6, 2, 3, 4, 4.5, 5, 6, 7, 8, 9, 9.5, 10, 11, 12, 13, 13.3, 13.6, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24);         //specify an extra value at the end
        public static $levels_name = array(0, 1,'a','b', 2, 3, 4,'a', 5, 6, 7, 8, 9,'a', 10, 11, 12, 13,'a','b', 14, 15, 16, 17, 18, 19, 20, 21, 22, 'Congo', 24);     //specify an extra value at the end
		
        //its an array with for each level with 1st element as url and 2nd as file name respectively
        public static $levels = [
            '1' => ['click', '1'],
            '1.3' => ['who', '1x3'],
            '1.6' => ['answerhere', '1x6'],
            '2' => ['open', '2'],
            '3' => ['1928', '3'],
            '4' => ['someoneLike', '4'],
            '4.5' => ['whatsapp', '4x5'],
            '5' => ['cryptic', '5'],
            '6' => ['notajackofall', '6'],
            '7' => ['tmbg', '7'],
            '8' => ['thecode', '8'],
			'9' => ['60th', '9'],
			'9.5' => ['symbols', '9x5'],
			'10' => ['Brand', '10'],
			'11' => ['game', '11'],
			'12' => ['third', '12'],
			'13' => ['randomnumber', '13'],
			'13.3' => ['eodnhoj', '13x3'],
			'13.6' => ['limbo', '13x6'],
			'14' => ['jinchuriki', '14'],
			'15' => ['sa', '15'],
			'16' => ['poetry', '16'],
			'17' => ['eric', '17'],
			'18' => ['minority', '18'],
			'19' => ['mg', '19'],
			'20' => ['julian', '20'],
			'21' => ['ditsanddahs', '21'],
			'22' => ['TheFinalLevel', '22'],
			'23' => ['Congrats', 'congrats']
        ];
		

        public static $skip_levels = ['1','1.6', '13.6'];       //levels where url change will be the answer

        public static $dowload_levels = [
                                        '2' => ['close'],
                                        '11' => ['game.pgn'],
                                        '13' => ['528491']
                                        ];    //downloadables links


}