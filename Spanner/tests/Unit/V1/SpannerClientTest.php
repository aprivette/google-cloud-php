<?php
/*
 * Copyright 2018 Google LLC
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

namespace Google\Cloud\Spanner\Tests\Unit\V1;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\ServerStream;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\Spanner\V1\BatchCreateSessionsResponse;
use Google\Cloud\Spanner\V1\BatchWriteResponse;
use Google\Cloud\Spanner\V1\CommitResponse;
use Google\Cloud\Spanner\V1\ExecuteBatchDmlResponse;
use Google\Cloud\Spanner\V1\KeySet;
use Google\Cloud\Spanner\V1\ListSessionsResponse;
use Google\Cloud\Spanner\V1\PartialResultSet;
use Google\Cloud\Spanner\V1\PartitionResponse;
use Google\Cloud\Spanner\V1\ResultSet;
use Google\Cloud\Spanner\V1\Session;
use Google\Cloud\Spanner\V1\SpannerClient;
use Google\Cloud\Spanner\V1\Transaction;
use Google\Cloud\Spanner\V1\TransactionOptions;
use Google\Cloud\Spanner\V1\TransactionSelector;
use Google\Protobuf\GPBEmpty;
use Google\Rpc\Code;
use stdClass;

/**
 * @group spanner
 *
 * @group gapic
 */
class SpannerClientTest extends GeneratedTest
{
    /** @return TransportInterface */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /** @return CredentialsWrapper */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)->disableOriginalConstructor()->getMock();
    }

    /** @return SpannerClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new SpannerClient($options);
    }

    /** @test */
    public function batchCreateSessionsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new BatchCreateSessionsResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $sessionCount = 185691686;
        $response = $gapicClient->batchCreateSessions($formattedDatabase, $sessionCount);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/BatchCreateSessions', $actualFuncCall);
        $actualValue = $actualRequestObject->getDatabase();
        $this->assertProtobufEquals($formattedDatabase, $actualValue);
        $actualValue = $actualRequestObject->getSessionCount();
        $this->assertProtobufEquals($sessionCount, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchCreateSessionsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $sessionCount = 185691686;
        try {
            $gapicClient->batchCreateSessions($formattedDatabase, $sessionCount);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchWriteTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new BatchWriteResponse();
        $transport->addResponse($expectedResponse);
        $expectedResponse2 = new BatchWriteResponse();
        $transport->addResponse($expectedResponse2);
        $expectedResponse3 = new BatchWriteResponse();
        $transport->addResponse($expectedResponse3);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $mutationGroups = [];
        $serverStream = $gapicClient->batchWrite($formattedSession, $mutationGroups);
        $this->assertInstanceOf(ServerStream::class, $serverStream);
        $responses = iterator_to_array($serverStream->readAll());
        $expectedResponses = [];
        $expectedResponses[] = $expectedResponse;
        $expectedResponses[] = $expectedResponse2;
        $expectedResponses[] = $expectedResponse3;
        $this->assertEquals($expectedResponses, $responses);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/BatchWrite', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getMutationGroups();
        $this->assertProtobufEquals($mutationGroups, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchWriteExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->setStreamingStatus($status);
        $this->assertTrue($transport->isExhausted());
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $mutationGroups = [];
        $serverStream = $gapicClient->batchWrite($formattedSession, $mutationGroups);
        $results = $serverStream->readAll();
        try {
            iterator_to_array($results);
            // If the close stream method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function beginTransactionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $id = '27';
        $expectedResponse = new Transaction();
        $expectedResponse->setId($id);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $options = new TransactionOptions();
        $response = $gapicClient->beginTransaction($formattedSession, $options);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/BeginTransaction', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getOptions();
        $this->assertProtobufEquals($options, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function beginTransactionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $options = new TransactionOptions();
        try {
            $gapicClient->beginTransaction($formattedSession, $options);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function commitTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new CommitResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $mutations = [];
        $response = $gapicClient->commit($formattedSession, $mutations);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/Commit', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getMutations();
        $this->assertProtobufEquals($mutations, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function commitExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $mutations = [];
        try {
            $gapicClient->commit($formattedSession, $mutations);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createSessionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $creatorRole = 'creatorRole-1605962583';
        $multiplexed = false;
        $expectedResponse = new Session();
        $expectedResponse->setName($name);
        $expectedResponse->setCreatorRole($creatorRole);
        $expectedResponse->setMultiplexed($multiplexed);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $response = $gapicClient->createSession($formattedDatabase);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/CreateSession', $actualFuncCall);
        $actualValue = $actualRequestObject->getDatabase();
        $this->assertProtobufEquals($formattedDatabase, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createSessionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        try {
            $gapicClient->createSession($formattedDatabase);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteSessionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $gapicClient->deleteSession($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/DeleteSession', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteSessionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        try {
            $gapicClient->deleteSession($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeBatchDmlTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ExecuteBatchDmlResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $transaction = new TransactionSelector();
        $statements = [];
        $seqno = 109325920;
        $response = $gapicClient->executeBatchDml($formattedSession, $transaction, $statements, $seqno);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/ExecuteBatchDml', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getTransaction();
        $this->assertProtobufEquals($transaction, $actualValue);
        $actualValue = $actualRequestObject->getStatements();
        $this->assertProtobufEquals($statements, $actualValue);
        $actualValue = $actualRequestObject->getSeqno();
        $this->assertProtobufEquals($seqno, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeBatchDmlExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $transaction = new TransactionSelector();
        $statements = [];
        $seqno = 109325920;
        try {
            $gapicClient->executeBatchDml($formattedSession, $transaction, $statements, $seqno);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeSqlTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ResultSet();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        $response = $gapicClient->executeSql($formattedSession, $sql);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/ExecuteSql', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getSql();
        $this->assertProtobufEquals($sql, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeSqlExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        try {
            $gapicClient->executeSql($formattedSession, $sql);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeStreamingSqlTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $chunkedValue = true;
        $resumeToken2 = '90';
        $last = true;
        $expectedResponse = new PartialResultSet();
        $expectedResponse->setChunkedValue($chunkedValue);
        $expectedResponse->setResumeToken($resumeToken2);
        $expectedResponse->setLast($last);
        $transport->addResponse($expectedResponse);
        $chunkedValue2 = false;
        $resumeToken3 = '91';
        $last2 = false;
        $expectedResponse2 = new PartialResultSet();
        $expectedResponse2->setChunkedValue($chunkedValue2);
        $expectedResponse2->setResumeToken($resumeToken3);
        $expectedResponse2->setLast($last2);
        $transport->addResponse($expectedResponse2);
        $chunkedValue3 = true;
        $resumeToken4 = '92';
        $last3 = true;
        $expectedResponse3 = new PartialResultSet();
        $expectedResponse3->setChunkedValue($chunkedValue3);
        $expectedResponse3->setResumeToken($resumeToken4);
        $expectedResponse3->setLast($last3);
        $transport->addResponse($expectedResponse3);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        $serverStream = $gapicClient->executeStreamingSql($formattedSession, $sql);
        $this->assertInstanceOf(ServerStream::class, $serverStream);
        $responses = iterator_to_array($serverStream->readAll());
        $expectedResponses = [];
        $expectedResponses[] = $expectedResponse;
        $expectedResponses[] = $expectedResponse2;
        $expectedResponses[] = $expectedResponse3;
        $this->assertEquals($expectedResponses, $responses);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/ExecuteStreamingSql', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getSql();
        $this->assertProtobufEquals($sql, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function executeStreamingSqlExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->setStreamingStatus($status);
        $this->assertTrue($transport->isExhausted());
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        $serverStream = $gapicClient->executeStreamingSql($formattedSession, $sql);
        $results = $serverStream->readAll();
        try {
            iterator_to_array($results);
            // If the close stream method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getSessionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $creatorRole = 'creatorRole-1605962583';
        $multiplexed = false;
        $expectedResponse = new Session();
        $expectedResponse->setName($name2);
        $expectedResponse->setCreatorRole($creatorRole);
        $expectedResponse->setMultiplexed($multiplexed);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $response = $gapicClient->getSession($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/GetSession', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getSessionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        try {
            $gapicClient->getSession($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listSessionsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $sessionsElement = new Session();
        $sessions = [
            $sessionsElement,
        ];
        $expectedResponse = new ListSessionsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSessions($sessions);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        $response = $gapicClient->listSessions($formattedDatabase);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getSessions()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/ListSessions', $actualFuncCall);
        $actualValue = $actualRequestObject->getDatabase();
        $this->assertProtobufEquals($formattedDatabase, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listSessionsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedDatabase = $gapicClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
        try {
            $gapicClient->listSessions($formattedDatabase);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function partitionQueryTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new PartitionResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        $response = $gapicClient->partitionQuery($formattedSession, $sql);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/PartitionQuery', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getSql();
        $this->assertProtobufEquals($sql, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function partitionQueryExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $sql = 'sql114126';
        try {
            $gapicClient->partitionQuery($formattedSession, $sql);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function partitionReadTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new PartitionResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $keySet = new KeySet();
        $response = $gapicClient->partitionRead($formattedSession, $table, $keySet);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/PartitionRead', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getTable();
        $this->assertProtobufEquals($table, $actualValue);
        $actualValue = $actualRequestObject->getKeySet();
        $this->assertProtobufEquals($keySet, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function partitionReadExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $keySet = new KeySet();
        try {
            $gapicClient->partitionRead($formattedSession, $table, $keySet);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function readTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ResultSet();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $columns = [];
        $keySet = new KeySet();
        $response = $gapicClient->read($formattedSession, $table, $columns, $keySet);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/Read', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getTable();
        $this->assertProtobufEquals($table, $actualValue);
        $actualValue = $actualRequestObject->getColumns();
        $this->assertProtobufEquals($columns, $actualValue);
        $actualValue = $actualRequestObject->getKeySet();
        $this->assertProtobufEquals($keySet, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function readExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $columns = [];
        $keySet = new KeySet();
        try {
            $gapicClient->read($formattedSession, $table, $columns, $keySet);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function rollbackTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $transactionId = '28';
        $gapicClient->rollback($formattedSession, $transactionId);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/Rollback', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getTransactionId();
        $this->assertProtobufEquals($transactionId, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function rollbackExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $transactionId = '28';
        try {
            $gapicClient->rollback($formattedSession, $transactionId);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function streamingReadTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $chunkedValue = true;
        $resumeToken2 = '90';
        $last = true;
        $expectedResponse = new PartialResultSet();
        $expectedResponse->setChunkedValue($chunkedValue);
        $expectedResponse->setResumeToken($resumeToken2);
        $expectedResponse->setLast($last);
        $transport->addResponse($expectedResponse);
        $chunkedValue2 = false;
        $resumeToken3 = '91';
        $last2 = false;
        $expectedResponse2 = new PartialResultSet();
        $expectedResponse2->setChunkedValue($chunkedValue2);
        $expectedResponse2->setResumeToken($resumeToken3);
        $expectedResponse2->setLast($last2);
        $transport->addResponse($expectedResponse2);
        $chunkedValue3 = true;
        $resumeToken4 = '92';
        $last3 = true;
        $expectedResponse3 = new PartialResultSet();
        $expectedResponse3->setChunkedValue($chunkedValue3);
        $expectedResponse3->setResumeToken($resumeToken4);
        $expectedResponse3->setLast($last3);
        $transport->addResponse($expectedResponse3);
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $columns = [];
        $keySet = new KeySet();
        $serverStream = $gapicClient->streamingRead($formattedSession, $table, $columns, $keySet);
        $this->assertInstanceOf(ServerStream::class, $serverStream);
        $responses = iterator_to_array($serverStream->readAll());
        $expectedResponses = [];
        $expectedResponses[] = $expectedResponse;
        $expectedResponses[] = $expectedResponse2;
        $expectedResponses[] = $expectedResponse3;
        $this->assertEquals($expectedResponses, $responses);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.spanner.v1.Spanner/StreamingRead', $actualFuncCall);
        $actualValue = $actualRequestObject->getSession();
        $this->assertProtobufEquals($formattedSession, $actualValue);
        $actualValue = $actualRequestObject->getTable();
        $this->assertProtobufEquals($table, $actualValue);
        $actualValue = $actualRequestObject->getColumns();
        $this->assertProtobufEquals($columns, $actualValue);
        $actualValue = $actualRequestObject->getKeySet();
        $this->assertProtobufEquals($keySet, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function streamingReadExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->setStreamingStatus($status);
        $this->assertTrue($transport->isExhausted());
        // Mock request
        $formattedSession = $gapicClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
        $table = 'table110115790';
        $columns = [];
        $keySet = new KeySet();
        $serverStream = $gapicClient->streamingRead($formattedSession, $table, $columns, $keySet);
        $results = $serverStream->readAll();
        try {
            iterator_to_array($results);
            // If the close stream method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }
}
