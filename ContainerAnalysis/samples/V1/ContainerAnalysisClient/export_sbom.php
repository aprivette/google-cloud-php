<?php
/*
 * Copyright 2025 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START containeranalysis_v1_generated_ContainerAnalysis_ExportSBOM_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\ContainerAnalysis\V1\Client\ContainerAnalysisClient;
use Google\Cloud\ContainerAnalysis\V1\ExportSBOMRequest;
use Google\Cloud\ContainerAnalysis\V1\ExportSBOMResponse;

/**
 * Generates an SBOM for the given resource.
 *
 * @param string $name The name of the resource in the form of
 *                     `projects/[PROJECT_ID]/resources/[RESOURCE_URL]`.
 */
function export_sbom_sample(string $name): void
{
    // Create a client.
    $containerAnalysisClient = new ContainerAnalysisClient();

    // Prepare the request message.
    $request = (new ExportSBOMRequest())
        ->setName($name);

    // Call the API and handle any network failures.
    try {
        /** @var ExportSBOMResponse $response */
        $response = $containerAnalysisClient->exportSBOM($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $name = '[NAME]';

    export_sbom_sample($name);
}
// [END containeranalysis_v1_generated_ContainerAnalysis_ExportSBOM_sync]
