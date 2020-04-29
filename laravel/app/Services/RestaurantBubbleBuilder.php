<?php

namespace App\Services;

use LINE\LINEBot\MessageBuilder\Flex\ContainerBuilder;

class RestaurantBubbleBuilder implements ContainerBuilder
{
  private $imageUrl;
  private $name;
  private $closestStation;
  private $minutesByFoot;
  private $category;
  private $budget;
  private $latitude;
  private $longitude;
  private $phoneNumber;
  private $restaurantUrl;

  public static function builder(): RestaurantBubbleBuilder
  {
    return new self();
  }
}