<?php
class Product
{
        protected $sku;
        protected $name;
        protected $brand;
        protected $price;
        protected $shippingPrice;
        protected $quantity;
        protected $deliveryTime = '3-5 Days';
        protected $images = [];
        protected $description;
        protected $feedbackScore;
        protected $faqs;

        public function __construct($sku, $price, $shippingPrice, $quantity)
        {
                $this->sku = $sku;
                $this->price = $price;
                $this->shippingPrice = $shippingPrice;
                $this->quantity = $quantity;
        }

        /**
         * Get the value of sku
         */
        public function getSku()
        {
                return $this->sku;
        }

        /**
         * Set the value of sku
         *
         * @return  self
         */
        public function setSku($sku)
        {
                $this->sku = $sku;

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
         * Get the value of brand
         */
        public function getBrand()
        {
                return $this->brand;
        }

        /**
         * Set the value of brand
         *
         * @return  self
         */
        public function setBrand($brand)
        {
                $this->brand = $brand;

                return $this;
        }

        /**
         * Get the value of price
         */
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of quantity
         */
        public function getQuantity()
        {
                return $this->quantity;
        }

        /**
         * Set the value of quantity
         *
         * @return  self
         */
        public function setQuantity($quantity)
        {
                $this->quantity = $quantity;

                return $this;
        }

        /**
         * Get the value of deliveryTime
         */
        public function getdeliveryTime()
        {
                return $this->deliveryTime;
        }

        /**
         * Set the value of deliveryTime
         *
         * @return  self
         */
        public function setdeliveryTime($deliveryTime)
        // setto premium member nella funzione e poi faccio:
        // if get premiumMember allora deliverytime = 1--2 days
        {
                $this->deliveryTime = $deliveryTime;

                return $this;
        }

        /**
         * Get the value of shippingPrice
         */ 
        public function getShippingPrice()
        {
                return $this->shippingPrice;
        }

        /**
         * Set the value of shippingPrice
         *
         * @return  self
         */ 
        public function setShippingPrice($shippingPrice)
        // setto premium member nella funzione e poi faccio:
        // if get premiumMember allora shipping price = 0, else = 5% del price
        {
                $this->shippingPrice = $shippingPrice;

                return $this;
        }

        /**
         * Get the value of images
         */
        public function getImages()
        {
                return $this->images;
        }

        /**
         * Set the value of images
         *
         * @return  self
         */
        public function setImages($images)
        {
                $this->images = $images;

                return $this;
        }

        /**
         * Get the value of description
         */
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of feedbackScore
         */
        public function getFeedbackScore()
        {
                return $this->feedbackScore;
        }

        /**
         * Set the value of feedbackScore
         *
         * @return  self
         */
        public function setFeedbackScore($feedbackScore)
        {
                $this->feedbackScore = $feedbackScore;

                return $this;
        }

        /**
         * Get the value of faqs
         */
        public function getFaqs()
        {
                return $this->faqs;
        }

        /**
         * Set the value of faqs
         *
         * @return  self
         */
        public function setFaqs($faqs)
        {
                $this->faqs = $faqs;

                return $this;
        }

}
