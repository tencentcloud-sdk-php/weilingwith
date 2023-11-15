<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeElementProfileTree请求参数结构体
 *
 * @method string getBuildingId() 获取建筑id
 * @method void setBuildingId(string $BuildingId) 设置建筑id
 * @method string getWorkspaceId() 获取项目空间id
 * @method void setWorkspaceId(string $WorkspaceId) 设置项目空间id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method string getElementId() 获取父级构件id
 * @method void setElementId(string $ElementId) 设置父级构件id
 * @method integer getLevel() 获取构件级别
 * @method void setLevel(integer $Level) 设置构件级别
 * @method string getSpaceTypeCode() 获取空间分类代码
 * @method void setSpaceTypeCode(string $SpaceTypeCode) 设置空间分类代码
 */
class DescribeElementProfileTreeRequest extends AbstractModel
{
    /**
     * @var string 建筑id
     */
    public $BuildingId;

    /**
     * @var string 项目空间id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var string 父级构件id
     */
    public $ElementId;

    /**
     * @var integer 构件级别
     */
    public $Level;

    /**
     * @var string 空间分类代码
     */
    public $SpaceTypeCode;

    /**
     * @param string $BuildingId 建筑id
     * @param string $WorkspaceId 项目空间id
     * @param string $ApplicationToken 应用token
     * @param string $ElementId 父级构件id
     * @param integer $Level 构件级别
     * @param string $SpaceTypeCode 空间分类代码
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
        if (array_key_exists("BuildingId",$param) and $param["BuildingId"] !== null) {
            $this->BuildingId = $param["BuildingId"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("ElementId",$param) and $param["ElementId"] !== null) {
            $this->ElementId = $param["ElementId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SpaceTypeCode",$param) and $param["SpaceTypeCode"] !== null) {
            $this->SpaceTypeCode = $param["SpaceTypeCode"];
        }
    }
}
