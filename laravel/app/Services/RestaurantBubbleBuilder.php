<?php

namespace App\Services;

use Illuminate\Support\Arr;

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

  public function setContents(array $restaurant): void
  {
    $this->imageUrl = Arr::get($restaurant, 'image_url.shop_image1', null);
    $this->name = Arr::get($restaurant, 'name', null);
    $this->closestStation = Arr::get($restaurant, 'access.station', null);
    $this->minutesByFoot = Arr::get($restaurant, 'access.walk', null);
    $this->category = Arr::get($restaurant, 'category', null);
    $this->budget = Arr::get($restaurant, 'budget', null);
    $this->latitude = Arr::get($restaurant, 'latitude', null);
    $this->longitude = Arr::get($restaurant, 'longitude', null);
    $this->phoneNumber = Arr::get($restaurant, 'tel', null);
    $this->restaurantUrl = Arr::get($restaurant, 'url', null);
  }
}