<?php
namespace Tests\Feature\Services;
use App\Services\LineBotService;
use Tests\TestCase;
class LineBotServiceTest extends TestCase
{
    /** @var  LineBotService */
    private $lineBotService;
    public function setUp()
    {
        parent::setUp();
        $this->lineBotService = app(LineBotService::class);
    }
    public function tearDown()
    {
        parent::tearDown();
    }
    public function testPushMessage()
    {
        $response = $this->lineBotService->pushMessage('Test from laravel.');
        $this->assertEquals(200, $response->getHTTPStatus());
    }
}
