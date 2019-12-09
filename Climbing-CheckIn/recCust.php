<?php

    class recCust {
        public $customer_id;
        public $fname;
        public $lname;
        public $profile_picture;
        public $age;
        public $membership;
        public $privilege;
        public $daysleft;

        function __construct($customer_id, $fname, $lname, $profile_picture, $age, $membership, $privilege, $daysleft) {
          $this->customer_id = $customer_id;
          $this->fname = $fname;
          $this->lname = $lname;
          $this->profile_picture = $profile_picture;
          $this->age = $age;
          $this->membership = $membership;
          $this->privilege = $privilege;
          $this->daysleft = $daysleft;
        }

        function getRecCust() {
          return $this;
        }

            function getcustomer_id() {
              return $this->customer_id;
            }

              function setcustomer_id($id) {
                $this->customer_id = $id;
              }



            function getfname() {
              return $this->fname;
            }

              function setfname($fname) {
                $this->fname = $fname;
              }



            function getlname() {
              return $this->lname; 
            }

              function setlname($lname) {
                $this->lname = $lname;
              }



            function getprofile_picture() {
              return $this->profile_picture;
            }

              function setprofile_picture($profile_picture) {
                $this->profile_picture = $profile_picture;
              }



            function getage() {
              return $this->age;
            }

              function setage($age) {
                $this->age = $age;
              }



            function getmembership() {
              return $this->membership;
            }

              function setmembership($membership) {
                $this->membership = $membership;
              }



            function getprivilege() {
              return $this->privilege;
            }

              function setprivilege($privilege) {
                $this->privilege = $privilege;
              }

            function getdaysleft() {
              return $this->daysleft;
            }

              function setdaysleft($daysleft) {
                $this->daysleft = $daysleft;
              }
            
      }
?>