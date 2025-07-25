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
 * UpdateWorkspaceParkAttributes请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method string getParkName() 获取园区简称
 * @method void setParkName(string $ParkName) 设置园区简称
 * @method string getParkNum() 获取园区编号
 * @method void setParkNum(string $ParkNum) 设置园区编号
 */
class UpdateWorkspaceParkAttributesRequest extends AbstractModel
{
    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var string 园区简称
     */
    public $ParkName;

    /**
     * @var string 园区编号
     */
    public $ParkNum;

    /**
     * @param integer $WorkspaceId 工作空间id
     * @param string $ApplicationToken 应用token
     * @param string $ParkName 园区简称
     * @param string $ParkNum 园区编号
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("ParkName",$param) and $param["ParkName"] !== null) {
            $this->ParkName = $param["ParkName"];
        }

        if (array_key_exists("ParkNum",$param) and $param["ParkNum"] !== null) {
            $this->ParkNum = $param["ParkNum"];
        }
    }
}
