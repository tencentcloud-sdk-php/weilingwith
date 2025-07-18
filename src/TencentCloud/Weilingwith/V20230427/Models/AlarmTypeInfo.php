<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警类型
 *
 * @method string getType() 获取告警父类型
 * @method void setType(string $Type) 设置告警父类型
 * @method string getSubType() 获取告警子类型(如果传告警子类型，则必传父类型)
 * @method void setSubType(string $SubType) 设置告警子类型(如果传告警子类型，则必传父类型)
 */
class AlarmTypeInfo extends AbstractModel
{
    /**
     * @var string 告警父类型
     */
    public $Type;

    /**
     * @var string 告警子类型(如果传告警子类型，则必传父类型)
     */
    public $SubType;

    /**
     * @param string $Type 告警父类型
     * @param string $SubType 告警子类型(如果传告警子类型，则必传父类型)
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }
    }
}
