<?php

use NRM\SimplyRetsClient\Model\Listing;
use NRM\SimplyRetsClient\PropertyParameterSet;

/**
 * Property listing test
 *
 * @todo Mock ACTUAL error responses as they are rec'd from the API. Right now,
 *       they are placeholders.
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class ListingTests extends ClientTestCase
{
    private $standardJson;
    private $standardListing;

    public function setUp()
    {
        $client = $this->createClient($this->getHandledConfig(200));
        $this->standardListing = $client->getProperty(1);
        $this->standardJson = json_decode($this->getData('property'));
    }

    public function tearDown()
    {
        unset($this->standardListing);
    }

    public function testListingSuccessResponse()
    {
        $client = $this->createClient($this->getHandledConfig(200));

        $this->assertInstanceOf('NRM\SimplyRetsClient\Model\Listing', $client->getProperty(1));
    }

    public function testListingRawSuccessResponse()
    {
      $client = $this->createClient($this->getHandledConfig(200));
      $raw = $client->getRawProperty(1);
      $decoded = json_decode((string) $raw->getBody());

      $this->assertNotEmpty($raw);
      $this->assertNotFalse($decoded);
      $this->assertSame(JSON_ERROR_NONE, json_last_error());
    }

    /**
     * @expectedException GuzzleHttp\Exception\ClientException
     */
    public function testListingBadAuthenticationResponse()
    {
        $client = $this->createClient($this->getHandledConfig(401));

        $client->getProperty(1);
    }

    /**
     * @expectedException GuzzleHttp\Exception\ClientException
     */
    public function testListingBadAuthorizationesponse()
    {
        $client = $this->createClient($this->getHandledConfig(403));

        $client->getProperty(1);
    }

    /**
     * @expectedException GuzzleHttp\Exception\ClientException
     */
    public function testListingOverusedResponse()
    {
        $client = $this->createClient($this->getHandledConfig(426));

        $client->getProperty(1);
    }

    /**
     * @expectedException GuzzleHttp\Exception\ClientException
     */
    public function testListingBadServerResponse()
    {
        $client = $this->createClient($this->getHandledConfig(500));

        $client->getProperty(1);
    }

    public function testListingUtilizesParameters()
    {
        $client = $this->createClient($this->getHandledConfig(200));

        $params = $this->getMockBuilder('NRM\SimplyRetsClient\PropertyParameterSet')
            ->setMethods(array('toQueryString'))
            ->getMock();

        $params->expects($this->once())->method('toQueryString');

        $client->getProperty(1, $params);
    }

    public function testListingConstruction()
    {
        $listing = new Listing();

        $this->assertAttributeInternalType('array', 'photos', $listing);
    }

    public function testListingDeserializationSetsMlsId()
    {
        $this->assertDeserializationMatch('mlsId', 'getMlsId');
    }

    // Sub object deserialization

    public function testListingDeserializationSetsPropertyDetails()
    {
        $this->assertInstanceOf('NRM\SimplyRetsClient\Model\PropertyDetails', $this->standardListing->getPropertyDetails());
    }

    public function testListingDeserializationSetsMlsDetails()
    {
        $this->assertInstanceOf('NRM\SimplyRetsClient\Model\MlsDetails', $this->standardListing->getMlsDetails());
    }

    public function testListingDeserializationSetsGeolocationDetails()
    {
        $this->assertInstanceOf('NRM\SimplyRetsClient\Model\GeolocationDetails', $this->standardListing->getGeolocationDetails());
    }

    public function testListingDeserializationSetsAgent()
    {
        $this->assertInstanceOf('NRM\SimplyRetsClient\Model\Agent', $this->standardListing->getAgent());
    }

    public function testListingDeserializationSetsSchoolDetails()
    {
        $this->assertInstanceOf('NRM\SimplyRetsClient\Model\SchoolDetails', $this->standardListing->getSchoolDetails());
    }

    // Dates
    public function testListingDeserializationSetsListDate()
    {
        $date = $this->standardListing->getListDate()->format('Y-m-d\TH:i:s.u\Z');
        $date = str_replace('000', '', $date);

        $this->assertSame($this->standardJson->listDate, $date);
    }

    // Dates
    public function testListingDeserializationSetsModificationDate()
    {
        $date = $this->standardListing->getModifiedAt()->format('Y-m-d\TH:i:s.u\Z');
        $date = str_replace('000', '', $date);

        $this->assertSame($this->standardJson->modified, $date);
    }

    // Normal methods

    public function testListingDeserializationSetsTerms()
    {
        $this->assertDeserializationMatch('terms', 'getTerms');
    }

    public function testListingDeserializationSetsShowingInstructions()
    {
        $this->assertDeserializationMatch('showingInstructions', 'getShowingInstructions');
    }

    public function testListingDeserializationSetsLeaseTerm()
    {
        $this->assertDeserializationMatch('leaseTerm', 'getLeaseTerm');
    }

    public function testListingDeserializationSetsDisclaimer()
    {
        $this->assertDeserializationMatch('disclaimer', 'getDisclaimer');
    }

    public function testListingDeserializationSetsPhotos()
    {
        $this->assertDeserializationMatch('photos', 'getPhotos');
    }

    public function testListingDeserializationSetsListPrice()
    {
        $this->assertDeserializationMatch('listPrice', 'getListPrice');
    }

    public function testListingDeserializationSetsLeaseType()
    {
        $this->assertDeserializationMatch('leaseType', 'getLeaseType');
    }

    public function testListingDeserializationSetsPrivateRemarks()
    {
        $this->assertDeserializationMatch('privateRemarks', 'getPrivateRemarks');
    }

    public function testListingDeserializationSetsRemarks()
    {
        $this->assertDeserializationMatch('remarks', 'getRemarks');
    }

    public function testListingDeserializationSetsListingId()
    {
        $this->assertDeserializationMatch('listingId', 'getListingId');
    }

    private function assertDeserializationMatch($jsonAttribute, $objectGetter = null)
    {
        $this->assertSame(
            $this->standardJson->{$jsonAttribute},
            $this->standardListing->{$objectGetter}(),
            sprintf('The JSON attribute "%s" and deserialized object getter "%s" do not match', $jsonAttribute, $objectGetter)
        );
    }

    private function getHandledConfig($which)
    {
        switch ($which) {
            case 200:
                $response = $this->mockResponse(200, array(), $this->getData('property'));
                break;
            case 401:
                $response = $this->mockClientException(null, 401, array(), $this->getData('property-401'));
                break;
            case 403:
                $response = $this->mockClientException(null, 403, array(), $this->getData('property-403'));
                break;
            case 426:
                $response = $this->mockClientException(null, 426, array(), $this->getData('property-426'));
            break;
            case 500:
                $response = $this->mockClientException(null, 500, array(), $this->getData('property-500'));
                break;
            default:
                throw new \InvalidArgumentException('Unable to create listing handler configuration');
        }

        return array(
            'handler' => $this->mockHandler($response)
        );
    }
}
