<?php

/**
 * EthGasEstimationBatchResult Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * EthGasEstimationBatchResult Model
 */
class EthGasEstimationBatchResult extends AbstractModel {

    public const _D = null;
    protected static $_name = "EthGasEstimationBatchResult";
    protected static $_definition = [
        "error" => ["error", "bool", null, "getError", "setError", null, ["r" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 0, "nl" => 42, "xl" => 42]], 
        "data" => ["data", "\Tatum\Model\EthGasEstimationBatchResultData", null, "getData", "setData", null, ["r" => 0]], 
        "msg" => ["msg", "string", null, "getMsg", "setMsg", null, ["r" => 0]]
    ];

    /**
     * EthGasEstimationBatchResult
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get error
     *
     * @return bool
     */
    public function getError(): bool {
        return $this->_data["error"];
    }

    /**
     * Set error
     * 
     * @param bool $error If estimation succeeded.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setError(bool $error) {
        return $this->_set("error", $error);
    }

    /**
     * Get contract_address
     *
     * @return string|null
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string|null $contract_address Contract address of ERC20 token, if transaction is ERC20 token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get data
     *
     * @return \Tatum\Model\EthGasEstimationBatchResultData|null
     */
    public function getData(): ?\Tatum\Model\EthGasEstimationBatchResultData {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Tatum\Model\EthGasEstimationBatchResultData|null $data data
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?\Tatum\Model\EthGasEstimationBatchResultData $data) {
        return $this->_set("data", $data);
    }

    /**
     * Get msg
     *
     * @return string|null
     */
    public function getMsg(): ?string {
        return $this->_data["msg"];
    }

    /**
     * Set msg
     * 
     * @param string|null $msg Error message. Present only if error - true.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMsg(?string $msg) {
        return $this->_set("msg", $msg);
    }
}
