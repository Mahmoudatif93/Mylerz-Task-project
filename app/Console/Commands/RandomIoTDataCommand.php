<?php

namespace App\Console\Commands;

use App\Models\IoTData;
use Illuminate\Console\Command;

class RandomIoTDataCommand extends Command
{

  protected $enabled;

  public function __construct($enabled = true)
  {
    $this->enabled = $enabled;
    parent::__construct($this);
  }

  protected $signature = 'iot:generate-data {--interval=5}';
  protected $description = 'Generate random IoT data at regular intervals';

  public function handle()
  {

    while ($this->enabled) {
      if ($this->enabled == true) {
        $temperature = $this->generateRandomTemperature();
        $humidity = $this->generateRandomHumidity();
        // Save the IoT data to the database
        $this->saveIoTData($temperature, $humidity);

        echo "d";
      } else {
        break;
      }
    }
  }

  private function generateRandomTemperature()
  {
    // Generate a random temperature value between 10 and 30
    return rand(10, 30);
  }

  private function generateRandomHumidity()
  {
    // Generate a random humidity value between 40 and 80
    return rand(40, 80);
  }

  private function saveIoTData($temperature, $humidity)
  {
    // Create a new IoTData model instance
    $data = new IoTData();
    $data->temperature = $temperature;
    $data->humidity = $humidity;

    // Save the data to the database
    $data->save();
  }
}
