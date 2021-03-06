<?php

namespace LArtie\FlightStatsApi\Core\Objects;

/**
 * Class StatusFlight
 * @package LArtie\FlightStatsApi\Models\Objects
 */
final class StatusFlight extends BaseObject
{
    /**
     * @var integer
     */
    protected $flightId;

    /**
     * @var string
     */
    protected $carrierFsCode;

    /**
     * @var integer
     */
    protected $flightNumber;

    /**
     * @var string
     */
    protected $departureAirportFsCode;

    /**
     * @var string
     */
    protected $arrivalAirportFsCode;

    /**
     * @var object
     */
    protected $departureDate;

    /**
     * @var object
     */
    protected $arrivalDate;

    /**
     * @var
     */
    protected $status;

    /**
     * @var object
     */
    protected $schedule;

    /**
     * @var object
     */
    protected $operationalTimes;

    /**
     * @var array
     */
    protected $codeshares;

    /**
     * @var object
     */
    protected $delays;

    /**
     * @var object
     */
    protected $flightDurations;

    /**
     * @var object
     */
    protected $airportResources;

    /**
     * @var object
     */
    protected $flightStatusUpdates;

    /**
     * @var object
     */
    protected $flightEquipment;

    /**
     * @return int
     */
    public function getFlightId()
    {
        return $this->flightId;
    }

    /**
     * @param int $flightId
     */
    public function setFlightId(int $flightId)
    {
        $this->flightId = $flightId;
    }

    /**
     * @return string
     */
    public function getCarrierFsCode()
    {
        return $this->carrierFsCode;
    }

    /**
     * @param string $carrierFsCode
     */
    public function setCarrierFsCode(string $carrierFsCode)
    {
        $this->carrierFsCode = $carrierFsCode;
    }

    /**
     * @return int
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * @param int $flightNumber
     */
    public function setFlightNumber(int $flightNumber)
    {
        $this->flightNumber = $flightNumber;
    }

    /**
     * @return string
     */
    public function getDepartureAirportFsCode()
    {
        return $this->departureAirportFsCode;
    }

    /**
     * @param string $departureAirportFsCode
     */
    public function setDepartureAirportFsCode(string $departureAirportFsCode)
    {
        $this->departureAirportFsCode = $departureAirportFsCode;
    }

    /**
     * @return string
     */
    public function getArrivalAirportFsCode()
    {
        return $this->arrivalAirportFsCode;
    }

    /**
     * @param string $arrivalAirportFsCode
     */
    public function setArrivalAirportFsCode(string $arrivalAirportFsCode)
    {
        $this->arrivalAirportFsCode = $arrivalAirportFsCode;
    }

    /**
     * @return object
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param object $departureDate
     */
    public function setDepartureDate(object $departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * @return object
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @param object $arrivalDate
     */
    public function setArrivalDate(object $arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return object
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param object $schedule
     */
    public function setSchedule(object $schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * @return object
     */
    public function getOperationalTimes()
    {
        return $this->operationalTimes;
    }

    /**
     * @param object $operationalTimes
     */
    public function setOperationalTimes(object $operationalTimes)
    {
        $this->operationalTimes = $operationalTimes;
    }

    /**
     * @return array
     */
    public function getCodeshares()
    {
        return $this->codeshares;
    }

    /**
     * @param array $codeshares
     */
    public function setCodeshares(array $codeshares)
    {
        $this->codeshares = $codeshares;
    }

    /**
     * @return object
     */
    public function getDelays()
    {
        return $this->delays;
    }

    /**
     * @param object $delays
     */
    public function setDelays(array $delays)
    {
        $this->delays = $delays;
    }

    /**
     * @return object
     */
    public function getFlightDurations()
    {
        return $this->flightDurations;
    }

    /**
     * @param object $flightDurations
     */
    public function setFlightDurations(object $flightDurations)
    {
        $this->flightDurations = $flightDurations;
    }

    /**
     * @return object
     */
    public function getAirportResources()
    {
        return $this->airportResources;
    }

    /**
     * @param object $airportResources
     */
    public function setAirportResources(object $airportResources)
    {
        $this->airportResources = $airportResources;
    }

    /**
     * @return object
     */
    public function getFlightStatusUpdates()
    {
        return $this->flightStatusUpdates;
    }

    /**
     * @param object $flightStatusUpdates
     */
    public function setFlightStatusUpdates(object $flightStatusUpdates)
    {
        $this->flightStatusUpdates = $flightStatusUpdates;
    }

    /**
     * @return object
     */
    public function getFlightEquipment()
    {
        return $this->flightEquipment;
    }

    /**
     * @param object $flightEquipment
     */
    public function setFlightEquipment(object $flightEquipment)
    {
        $this->flightEquipment = $flightEquipment;
    }
}