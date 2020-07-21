<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => false, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => 'dj72XlZgqkdTkY17uG/LHkejZPdn+LErkDgtD4yR6a1jpf8ztARu1vAvGiLEOSmEL0HEbowvP55sGwD6uRen5A85YEzPq5mmqMRn0DlC4ClXmuaKAafKJuLYgLkqk8M5VMB9aam/6vikXs5AK7Q/RAdB04t89/1O/w1cDnyilFU=' ,
                    'channelSecret' => '6f9812d096591f5de928c2c975ba56fd',
                ]

                //'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
