<?php
class CrediCard
{
        protected $number;
        protected $expirationMonth;
        protected $expirationYear;
        protected $cvv;
        protected $type;
        protected $name;
        protected $lastName;

        public function __construct($number, $expirationMonth, $expirationYear, $cvv, $type, $name, $lastName)
        {
                $this->number = $number;
                $this->expirationMonth = $expirationMonth;
                $this->expirationYear = $expirationYear;
                $this->cvv = $cvv;
                $this->type = $type;
                $this->name = $name;
                $this->lastName = $lastName;
        }

        /**
         * Get the value of number
         */
        public function getNumber()
        {
                return $this->number;
        }

        /**
         * Set the value of number
         *
         * @return  self
         */
        public function setNumber($number)
        {
                $this->number = $number;

                return $this;
        }

        /**
         * Get the value of expirationMonth
         */
        public function getExpirationMonth()
        {
                return $this->expirationMonth;
        }

        /**
         * Set the value of expirationMonth
         *
         * @return  self
         */
        public function setExpirationMonth($expirationMonth)
        {
                $this->expirationMonth = $expirationMonth;

                return $this;
        }

        /**
         * Get the value of expirationYear
         */
        public function getExpirationYear()
        {
                return $this->expirationYear;
        }

        /**
         * Set the value of expirationYear
         *
         * @return  self
         */
        public function setExpirationYear($expirationYear)
        {
                $this->expirationYear = $expirationYear;

                return $this;
        }

        /**
         * Get the value of cvv
         */
        public function getCvv()
        {
                return $this->cvv;
        }

        /**
         * Set the value of cvv
         *
         * @return  self
         */
        public function setCvv($cvv)
        {
                $this->cvv = $cvv;

                return $this;
        }

        /**
         * Get the value of type
         */
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }

        /**
         * Get the value of name
         */
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of lastName
         */
        public function getLastName()
        {
                return $this->lastName;
        }

        /**
         * Set the value of lastName
         *
         * @return  self
         */
        public function setLastName($lastName)
        {
                $this->lastName = $lastName;

                return $this;
        }
}
