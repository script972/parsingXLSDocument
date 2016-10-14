<?php
/**
 * Created by PhpStorm.
 * User: script972
 * Date: 12.10.2016
 * Time: 20:17
 */
    class  Config{
        private $DirImg='./img/';
        private $DirFile='file';

        /**
         * @return string
         */
        public function getDirImg()
        {
            return $this->DirImg;
        }

        /**
         * @return string
         */
        public function getDirFile()
        {
            return $this->DirFile;
        }


        

        public  $cells = array(
            'A' => 'NameOfActivaty',
            'B' => 'ShortDescription',
            'C' => 'FullDescription',
            'D' => 'Timeing',
            'E' => 'Price',
            'F' => 'SelectSaveVenue',
            'G' => 'VenueName',
            'H' => 'AddressLine1',
            'I' => 'City',
            'J' => 'State',
            'K' => 'ZIPCode',
            'L' => 'Country',
            'M' => 'PhoneNumber',
            'N' => 'URL',
            'O'=>'Audience',
            'P'=>'Kids',
            'Q'=>'Adults',
            'R'=>'Teens',
            'S'=>'Seniors',
            'T'=>'Levels',
            'U'=>'Beginner',
            'V'=>'Friendly',
            'W'=>'Intermediate',
            'X'=>'Advanced',
            'Y'=>'Expert',
            'Z'=>'ChoosteCategory',
            'AA'=>'Food&Nutrition',
            'AB'=>'Health&Wellness',
            'AC'=>'PhysicalActivity',
            'AD'=>'SelectAllApplicableSubcategories',
            'AE'=>'CookingClasses',
            'AF'=>'Cycling',
            'AG'=>'Dance',
            'AH'=>'Educational',
            'AI'=>'GroupExercise',
            'AJ'=>'HealthScreenings',
            'AK'=>'MassageAcupuncture',
            'AL'=>'RunningWalking',
            'AM'=>'Yoga',
            'AN'=>'ImgURL',
            'AO'=>'Repeats',
            'AP'=>'StartsOn',
            'AQ'=>'Ends',
            'AR'=>'Custom',
            'AS'=>'RepeatEvery',
            'AT'=>'Number',
            'AU'=>'StartsOn',
            'AV'=>'Ends',

        );

        public function getCells()
        {
            return $this->cells;
        }

    }
?>