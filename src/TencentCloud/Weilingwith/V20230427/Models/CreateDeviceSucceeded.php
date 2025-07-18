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
 * 导入成功设备信息
 *
 * @method integer getProductId() 获取产品id
 * @method void setProductId(integer $ProductId) 设置产品id
 * @method string getParentWID() 获取父设备wid，不为空表示导入自设备
 * @method void setParentWID(string $ParentWID) 设置父设备wid，不为空表示导入自设备
 * @method string getWID() 获取设备编码
 * @method void setWID(string $WID) 设置设备编码
 * @method string getSN() 获取设备sn序列号
 * @method void setSN(string $SN) 设置设备sn序列号
 */
class CreateDeviceSucceeded extends AbstractModel
{
    /**
     * @var integer 产品id
     */
    public $ProductId;

    /**
     * @var string 父设备wid，不为空表示导入自设备
     */
    public $ParentWID;

    /**
     * @var string 设备编码
     */
    public $WID;

    /**
     * @var string 设备sn序列号
     */
    public $SN;

    /**
     * @param integer $ProductId 产品id
     * @param string $ParentWID 父设备wid，不为空表示导入自设备
     * @param string $WID 设备编码
     * @param string $SN 设备sn序列号
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ParentWID",$param) and $param["ParentWID"] !== null) {
            $this->ParentWID = $param["ParentWID"];
        }

        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }
    }
}
