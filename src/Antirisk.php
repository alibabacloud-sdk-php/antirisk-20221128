<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetZidTagByAtokenRequest;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetZidTagByAtokenResponse;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetZidTagScoreByAtokenRequest;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetZidTagScoreByAtokenResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Antirisk extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('antirisk', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param GetZidTagByAtokenRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetZidTagByAtokenResponse
     */
    public function getZidTagByAtokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->atoken)) {
            $query['atoken'] = $request->atoken;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetZidTagByAtoken',
            'version'     => '2022-11-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/anti/getZidTagByAtoken',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetZidTagByAtokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetZidTagByAtokenRequest $request
     *
     * @return GetZidTagByAtokenResponse
     */
    public function getZidTagByAtoken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getZidTagByAtokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetZidTagScoreByAtokenRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetZidTagScoreByAtokenResponse
     */
    public function getZidTagScoreByAtokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->atoken)) {
            $query['atoken'] = $request->atoken;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetZidTagScoreByAtoken',
            'version'     => '2022-11-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/anti/getZidTagScoreByAtoken',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetZidTagScoreByAtokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetZidTagScoreByAtokenRequest $request
     *
     * @return GetZidTagScoreByAtokenResponse
     */
    public function getZidTagScoreByAtoken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getZidTagScoreByAtokenWithOptions($request, $headers, $runtime);
    }
}
