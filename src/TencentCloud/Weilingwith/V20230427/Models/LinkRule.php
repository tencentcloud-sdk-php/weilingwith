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
 * 关联规则信息
 *
 * @method integer getId() 获取关联联动规则id
 * @method void setId(integer $Id) 设置关联联动规则id
 * @method string getName() 获取关联联动规则名字
 * @method void setName(string $Name) 设置关联联动规则名字
 */
class LinkRule extends AbstractModel
{
    /**
     * @var integer 关联联动规则id
     */
    public $Id;

    /**
     * @var string 关联联动规则名字
     */
    public $Name;

    /**
     * @param integer $Id 关联联动规则id
     * @param string $Name 关联联动规则名字
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
