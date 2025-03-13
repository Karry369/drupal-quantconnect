<?php

/**
 * XrpAccountTx_transactions_inner_meta_AffectedNodes_inner_CreatedNode Model
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
 * XrpAccountTx_transactions_inner_meta_AffectedNodes_inner_CreatedNode Model
 */
class XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNode extends AbstractModel {

    public const _D = null;
    protected static $_name = "XrpAccountTx_transactions_inner_meta_AffectedNodes_inner_CreatedNode";
    protected static $_definition = [
        "ledger_entry_type" => ["LedgerEntryType", "string", null, "getLedgerEntryType", "setLedgerEntryType", null, ["r" => 0]], 
        "ledger_index" => ["LedgerIndex", "string", null, "getLedgerIndex", "setLedgerIndex", null, ["r" => 0]], 
        "new_fields" => ["NewFields", "\Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNodeNewFields", null, "getNewFields", "setNewFields", null, ["r" => 0]]
    ];

    /**
     * XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNode
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get ledger_entry_type
     *
     * @return string|null
     */
    public function getLedgerEntryType(): ?string {
        return $this->_data["ledger_entry_type"];
    }

    /**
     * Set ledger_entry_type
     * 
     * @param string|null $ledger_entry_type ledger_entry_type
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLedgerEntryType(?string $ledger_entry_type) {
        return $this->_set("ledger_entry_type", $ledger_entry_type);
    }

    /**
     * Get ledger_index
     *
     * @return string|null
     */
    public function getLedgerIndex(): ?string {
        return $this->_data["ledger_index"];
    }

    /**
     * Set ledger_index
     * 
     * @param string|null $ledger_index ledger_index
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLedgerIndex(?string $ledger_index) {
        return $this->_set("ledger_index", $ledger_index);
    }

    /**
     * Get new_fields
     *
     * @return \Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNodeNewFields|null
     */
    public function getNewFields(): ?\Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNodeNewFields {
        return $this->_data["new_fields"];
    }

    /**
     * Set new_fields
     * 
     * @param \Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNodeNewFields|null $new_fields new_fields
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNewFields(?\Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNodeNewFields $new_fields) {
        return $this->_set("new_fields", $new_fields);
    }
}
