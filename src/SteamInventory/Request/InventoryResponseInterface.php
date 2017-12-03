<?php

namespace SteamInventory\Request;


use SteamInventory\ItemPair;

interface InventoryResponseInterface {
    /**
     * @return int|null
     */
    public function getLastAssetId();

    /**
     * @param int $index
     * @return ItemPair|null
     */
    public function getItem(int $index);

    /**
     * Return true if this inventory is private.
     * @return bool
     */
    public function isPrivate(): bool;

    /**
     * @return int
     */
    public function getPageSize(): int;

    /**
     * @return int
     * Return the total number of items in the inventory.
     */
    public function getInventorySize(): int;
}