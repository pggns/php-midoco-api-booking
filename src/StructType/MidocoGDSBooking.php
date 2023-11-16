<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGDSBooking StructType
 * @subpackage Structs
 */
class MidocoGDSBooking extends AbstractStructBase
{
    /**
     * The GDSBookingIdentification
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: GDSBookingIdentification
     * @var \Pggns\MidocoApi\Booking\StructType\GDSBookingIdentification
     */
    protected \Pggns\MidocoApi\Booking\StructType\GDSBookingIdentification $GDSBookingIdentification;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: Customer
     * @var \Pggns\MidocoApi\Booking\StructType\Customer_1[]
     */
    protected array $Customer = [];
    /**
     * The Traveler
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: Traveler
     * @var \Pggns\MidocoApi\Booking\StructType\Traveler[]
     */
    protected array $Traveler = [];
    /**
     * The FlightBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: FlightBooking
     * @var \Pggns\MidocoApi\Booking\StructType\FlightBooking[]
     */
    protected array $FlightBooking = [];
    /**
     * The CarBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Booking\StructType\Car_service_type[]
     */
    protected array $CarBooking = [];
    /**
     * The HotelBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Booking\StructType\Accomodation_service_type[]
     */
    protected array $HotelBooking = [];
    /**
     * The GDSRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: GDSRemark
     * @var \Pggns\MidocoApi\Booking\StructType\GDSRemark[]
     */
    protected array $GDSRemark = [];
    /**
     * The BillingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: BillingInfo
     * @var \Pggns\MidocoApi\Booking\StructType\BillingInfo|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\BillingInfo $BillingInfo = null;
    /**
     * The AdditionalService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Booking\StructType\AdditionalServiceType[]
     */
    protected array $AdditionalService = [];
    /**
     * The OriginalBookingMessageBase64
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: booking_message:OriginalBookingMessageBase64
     * @var string|null
     */
    protected ?string $OriginalBookingMessageBase64 = null;
    /**
     * Constructor method for MidocoGDSBooking
     * @uses MidocoGDSBooking::setGDSBookingIdentification()
     * @uses MidocoGDSBooking::setCustomer()
     * @uses MidocoGDSBooking::setTraveler()
     * @uses MidocoGDSBooking::setFlightBooking()
     * @uses MidocoGDSBooking::setCarBooking()
     * @uses MidocoGDSBooking::setHotelBooking()
     * @uses MidocoGDSBooking::setGDSRemark()
     * @uses MidocoGDSBooking::setBillingInfo()
     * @uses MidocoGDSBooking::setAdditionalService()
     * @uses MidocoGDSBooking::setOriginalBookingMessageBase64()
     * @param \Pggns\MidocoApi\Booking\StructType\GDSBookingIdentification $gDSBookingIdentification
     * @param \Pggns\MidocoApi\Booking\StructType\Customer_1[] $customer
     * @param \Pggns\MidocoApi\Booking\StructType\Traveler[] $traveler
     * @param \Pggns\MidocoApi\Booking\StructType\FlightBooking[] $flightBooking
     * @param \Pggns\MidocoApi\Booking\StructType\Car_service_type[] $carBooking
     * @param \Pggns\MidocoApi\Booking\StructType\Accomodation_service_type[] $hotelBooking
     * @param \Pggns\MidocoApi\Booking\StructType\GDSRemark[] $gDSRemark
     * @param \Pggns\MidocoApi\Booking\StructType\BillingInfo $billingInfo
     * @param \Pggns\MidocoApi\Booking\StructType\AdditionalServiceType[] $additionalService
     * @param string $originalBookingMessageBase64
     */
    public function __construct(\Pggns\MidocoApi\Booking\StructType\GDSBookingIdentification $gDSBookingIdentification, array $customer = [], array $traveler = [], array $flightBooking = [], array $carBooking = [], array $hotelBooking = [], array $gDSRemark = [], ?\Pggns\MidocoApi\Booking\StructType\BillingInfo $billingInfo = null, array $additionalService = [], ?string $originalBookingMessageBase64 = null)
    {
        $this
            ->setGDSBookingIdentification($gDSBookingIdentification)
            ->setCustomer($customer)
            ->setTraveler($traveler)
            ->setFlightBooking($flightBooking)
            ->setCarBooking($carBooking)
            ->setHotelBooking($hotelBooking)
            ->setGDSRemark($gDSRemark)
            ->setBillingInfo($billingInfo)
            ->setAdditionalService($additionalService)
            ->setOriginalBookingMessageBase64($originalBookingMessageBase64);
    }
    /**
     * Get GDSBookingIdentification value
     * @return \Pggns\MidocoApi\Booking\StructType\GDSBookingIdentification
     */
    public function getGDSBookingIdentification(): \Pggns\MidocoApi\Booking\StructType\GDSBookingIdentification
    {
        return $this->GDSBookingIdentification;
    }
    /**
     * Set GDSBookingIdentification value
     * @param \Pggns\MidocoApi\Booking\StructType\GDSBookingIdentification $gDSBookingIdentification
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function setGDSBookingIdentification(\Pggns\MidocoApi\Booking\StructType\GDSBookingIdentification $gDSBookingIdentification): self
    {
        $this->GDSBookingIdentification = $gDSBookingIdentification;
        
        return $this;
    }
    /**
     * Get Customer value
     * @return \Pggns\MidocoApi\Booking\StructType\Customer_1[]
     */
    public function getCustomer(): array
    {
        return $this->Customer;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerForArrayConstraintsFromSetCustomer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingCustomerItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingCustomerItem instanceof \Pggns\MidocoApi\Booking\StructType\Customer_1) {
                $invalidValues[] = is_object($midocoGDSBookingCustomerItem) ? get_class($midocoGDSBookingCustomerItem) : sprintf('%s(%s)', gettype($midocoGDSBookingCustomerItem), var_export($midocoGDSBookingCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer property can only contain items of type \Pggns\MidocoApi\Booking\StructType\Customer_1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\Customer_1[] $customer
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function setCustomer(array $customer = []): self
    {
        // validation for constraint: array
        if ('' !== ($customerArrayErrorMessage = self::validateCustomerForArrayConstraintsFromSetCustomer($customer))) {
            throw new InvalidArgumentException($customerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($customer) && count($customer) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($customer)), __LINE__);
        }
        $this->Customer = $customer;
        
        return $this;
    }
    /**
     * Add item to Customer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\Customer_1 $item
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function addToCustomer(\Pggns\MidocoApi\Booking\StructType\Customer_1 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Booking\StructType\Customer_1) {
            throw new InvalidArgumentException(sprintf('The Customer property can only contain items of type \Pggns\MidocoApi\Booking\StructType\Customer_1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->Customer) && count($this->Customer) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->Customer)), __LINE__);
        }
        $this->Customer[] = $item;
        
        return $this;
    }
    /**
     * Get Traveler value
     * @return \Pggns\MidocoApi\Booking\StructType\Traveler[]
     */
    public function getTraveler(): array
    {
        return $this->Traveler;
    }
    /**
     * This method is responsible for validating the values passed to the setTraveler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraveler method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerForArrayConstraintsFromSetTraveler(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingTravelerItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingTravelerItem instanceof \Pggns\MidocoApi\Booking\StructType\Traveler) {
                $invalidValues[] = is_object($midocoGDSBookingTravelerItem) ? get_class($midocoGDSBookingTravelerItem) : sprintf('%s(%s)', gettype($midocoGDSBookingTravelerItem), var_export($midocoGDSBookingTravelerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Traveler property can only contain items of type \Pggns\MidocoApi\Booking\StructType\Traveler, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Traveler value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\Traveler[] $traveler
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function setTraveler(array $traveler = []): self
    {
        // validation for constraint: array
        if ('' !== ($travelerArrayErrorMessage = self::validateTravelerForArrayConstraintsFromSetTraveler($traveler))) {
            throw new InvalidArgumentException($travelerArrayErrorMessage, __LINE__);
        }
        $this->Traveler = $traveler;
        
        return $this;
    }
    /**
     * Add item to Traveler value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\Traveler $item
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function addToTraveler(\Pggns\MidocoApi\Booking\StructType\Traveler $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Booking\StructType\Traveler) {
            throw new InvalidArgumentException(sprintf('The Traveler property can only contain items of type \Pggns\MidocoApi\Booking\StructType\Traveler, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Traveler[] = $item;
        
        return $this;
    }
    /**
     * Get FlightBooking value
     * @return \Pggns\MidocoApi\Booking\StructType\FlightBooking[]
     */
    public function getFlightBooking(): array
    {
        return $this->FlightBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setFlightBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightBookingForArrayConstraintsFromSetFlightBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingFlightBookingItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingFlightBookingItem instanceof \Pggns\MidocoApi\Booking\StructType\FlightBooking) {
                $invalidValues[] = is_object($midocoGDSBookingFlightBookingItem) ? get_class($midocoGDSBookingFlightBookingItem) : sprintf('%s(%s)', gettype($midocoGDSBookingFlightBookingItem), var_export($midocoGDSBookingFlightBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightBooking property can only contain items of type \Pggns\MidocoApi\Booking\StructType\FlightBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\FlightBooking[] $flightBooking
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function setFlightBooking(array $flightBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($flightBookingArrayErrorMessage = self::validateFlightBookingForArrayConstraintsFromSetFlightBooking($flightBooking))) {
            throw new InvalidArgumentException($flightBookingArrayErrorMessage, __LINE__);
        }
        $this->FlightBooking = $flightBooking;
        
        return $this;
    }
    /**
     * Add item to FlightBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\FlightBooking $item
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function addToFlightBooking(\Pggns\MidocoApi\Booking\StructType\FlightBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Booking\StructType\FlightBooking) {
            throw new InvalidArgumentException(sprintf('The FlightBooking property can only contain items of type \Pggns\MidocoApi\Booking\StructType\FlightBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FlightBooking[] = $item;
        
        return $this;
    }
    /**
     * Get CarBooking value
     * @return \Pggns\MidocoApi\Booking\StructType\Car_service_type[]
     */
    public function getCarBooking(): array
    {
        return $this->CarBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setCarBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarBookingForArrayConstraintsFromSetCarBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingCarBookingItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingCarBookingItem instanceof \Pggns\MidocoApi\Booking\StructType\Car_service_type) {
                $invalidValues[] = is_object($midocoGDSBookingCarBookingItem) ? get_class($midocoGDSBookingCarBookingItem) : sprintf('%s(%s)', gettype($midocoGDSBookingCarBookingItem), var_export($midocoGDSBookingCarBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CarBooking property can only contain items of type \Pggns\MidocoApi\Booking\StructType\Car_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CarBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\Car_service_type[] $carBooking
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function setCarBooking(array $carBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($carBookingArrayErrorMessage = self::validateCarBookingForArrayConstraintsFromSetCarBooking($carBooking))) {
            throw new InvalidArgumentException($carBookingArrayErrorMessage, __LINE__);
        }
        $this->CarBooking = $carBooking;
        
        return $this;
    }
    /**
     * Add item to CarBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\Car_service_type $item
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function addToCarBooking(\Pggns\MidocoApi\Booking\StructType\Car_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Booking\StructType\Car_service_type) {
            throw new InvalidArgumentException(sprintf('The CarBooking property can only contain items of type \Pggns\MidocoApi\Booking\StructType\Car_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CarBooking[] = $item;
        
        return $this;
    }
    /**
     * Get HotelBooking value
     * @return \Pggns\MidocoApi\Booking\StructType\Accomodation_service_type[]
     */
    public function getHotelBooking(): array
    {
        return $this->HotelBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelBookingForArrayConstraintsFromSetHotelBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingHotelBookingItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingHotelBookingItem instanceof \Pggns\MidocoApi\Booking\StructType\Accomodation_service_type) {
                $invalidValues[] = is_object($midocoGDSBookingHotelBookingItem) ? get_class($midocoGDSBookingHotelBookingItem) : sprintf('%s(%s)', gettype($midocoGDSBookingHotelBookingItem), var_export($midocoGDSBookingHotelBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelBooking property can only contain items of type \Pggns\MidocoApi\Booking\StructType\Accomodation_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\Accomodation_service_type[] $hotelBooking
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function setHotelBooking(array $hotelBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($hotelBookingArrayErrorMessage = self::validateHotelBookingForArrayConstraintsFromSetHotelBooking($hotelBooking))) {
            throw new InvalidArgumentException($hotelBookingArrayErrorMessage, __LINE__);
        }
        $this->HotelBooking = $hotelBooking;
        
        return $this;
    }
    /**
     * Add item to HotelBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\Accomodation_service_type $item
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function addToHotelBooking(\Pggns\MidocoApi\Booking\StructType\Accomodation_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Booking\StructType\Accomodation_service_type) {
            throw new InvalidArgumentException(sprintf('The HotelBooking property can only contain items of type \Pggns\MidocoApi\Booking\StructType\Accomodation_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->HotelBooking[] = $item;
        
        return $this;
    }
    /**
     * Get GDSRemark value
     * @return \Pggns\MidocoApi\Booking\StructType\GDSRemark[]
     */
    public function getGDSRemark(): array
    {
        return $this->GDSRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setGDSRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGDSRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGDSRemarkForArrayConstraintsFromSetGDSRemark(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingGDSRemarkItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingGDSRemarkItem instanceof \Pggns\MidocoApi\Booking\StructType\GDSRemark) {
                $invalidValues[] = is_object($midocoGDSBookingGDSRemarkItem) ? get_class($midocoGDSBookingGDSRemarkItem) : sprintf('%s(%s)', gettype($midocoGDSBookingGDSRemarkItem), var_export($midocoGDSBookingGDSRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GDSRemark property can only contain items of type \Pggns\MidocoApi\Booking\StructType\GDSRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GDSRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\GDSRemark[] $gDSRemark
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function setGDSRemark(array $gDSRemark = []): self
    {
        // validation for constraint: array
        if ('' !== ($gDSRemarkArrayErrorMessage = self::validateGDSRemarkForArrayConstraintsFromSetGDSRemark($gDSRemark))) {
            throw new InvalidArgumentException($gDSRemarkArrayErrorMessage, __LINE__);
        }
        $this->GDSRemark = $gDSRemark;
        
        return $this;
    }
    /**
     * Add item to GDSRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\GDSRemark $item
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function addToGDSRemark(\Pggns\MidocoApi\Booking\StructType\GDSRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Booking\StructType\GDSRemark) {
            throw new InvalidArgumentException(sprintf('The GDSRemark property can only contain items of type \Pggns\MidocoApi\Booking\StructType\GDSRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GDSRemark[] = $item;
        
        return $this;
    }
    /**
     * Get BillingInfo value
     * @return \Pggns\MidocoApi\Booking\StructType\BillingInfo|null
     */
    public function getBillingInfo(): ?\Pggns\MidocoApi\Booking\StructType\BillingInfo
    {
        return $this->BillingInfo;
    }
    /**
     * Set BillingInfo value
     * @param \Pggns\MidocoApi\Booking\StructType\BillingInfo $billingInfo
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function setBillingInfo(?\Pggns\MidocoApi\Booking\StructType\BillingInfo $billingInfo = null): self
    {
        $this->BillingInfo = $billingInfo;
        
        return $this;
    }
    /**
     * Get AdditionalService value
     * @return \Pggns\MidocoApi\Booking\StructType\AdditionalServiceType[]
     */
    public function getAdditionalService(): array
    {
        return $this->AdditionalService;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalServiceForArrayConstraintsFromSetAdditionalService(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingAdditionalServiceItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingAdditionalServiceItem instanceof \Pggns\MidocoApi\Booking\StructType\AdditionalServiceType) {
                $invalidValues[] = is_object($midocoGDSBookingAdditionalServiceItem) ? get_class($midocoGDSBookingAdditionalServiceItem) : sprintf('%s(%s)', gettype($midocoGDSBookingAdditionalServiceItem), var_export($midocoGDSBookingAdditionalServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalService property can only contain items of type \Pggns\MidocoApi\Booking\StructType\AdditionalServiceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\AdditionalServiceType[] $additionalService
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function setAdditionalService(array $additionalService = []): self
    {
        // validation for constraint: array
        if ('' !== ($additionalServiceArrayErrorMessage = self::validateAdditionalServiceForArrayConstraintsFromSetAdditionalService($additionalService))) {
            throw new InvalidArgumentException($additionalServiceArrayErrorMessage, __LINE__);
        }
        $this->AdditionalService = $additionalService;
        
        return $this;
    }
    /**
     * Add item to AdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\AdditionalServiceType $item
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function addToAdditionalService(\Pggns\MidocoApi\Booking\StructType\AdditionalServiceType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Booking\StructType\AdditionalServiceType) {
            throw new InvalidArgumentException(sprintf('The AdditionalService property can only contain items of type \Pggns\MidocoApi\Booking\StructType\AdditionalServiceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdditionalService[] = $item;
        
        return $this;
    }
    /**
     * Get OriginalBookingMessageBase64 value
     * @return string|null
     */
    public function getOriginalBookingMessageBase64(): ?string
    {
        return $this->OriginalBookingMessageBase64;
    }
    /**
     * Set OriginalBookingMessageBase64 value
     * @param string $originalBookingMessageBase64
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoGDSBooking
     */
    public function setOriginalBookingMessageBase64(?string $originalBookingMessageBase64 = null): self
    {
        // validation for constraint: string
        if (!is_null($originalBookingMessageBase64) && !is_string($originalBookingMessageBase64)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBookingMessageBase64, true), gettype($originalBookingMessageBase64)), __LINE__);
        }
        $this->OriginalBookingMessageBase64 = $originalBookingMessageBase64;
        
        return $this;
    }
}
