<?php

namespace Core;

class FileDB
{
    private string $file_name;
    private $data;

    /**
     * FileDB constructor.
     *
     * @param string $file_name
     */
    public function __construct(string $file_name)
    {
        $this->file_name = $file_name;
    }

    /**
     * Set $data variable
     *
     * @param array $data_array
     */
    public function setData(array $data_array)
    {
        $this->data = $data_array;
    }

    /**
     * Get $data variable
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data ?? [];
    }

    /**
     * Save data to file
     *
     * @return bool
     */
    public function save(): bool
    {
        $data = json_encode($this->getData());
        $bytes_written = file_put_contents($this->file_name, $data);

        return $bytes_written !== false;
    }

    /**
     * Get file, decode it to array and load it to $data property
     *
     * @return bool
     */
    public function load(): bool
    {
        if (file_exists($this->file_name)) {
            $data = file_get_contents($this->file_name);

            if ($data !== false) {
                $this->setData(json_decode($data, true) ?? []);
            } else {
                $this->setData([]);
            }

            return true;
        }

        return false;
    }

    /**
     * Checks if this index already exists in data.
     *
     * @param string $table_name
     * @return bool
     */
    public function tableExists(string $table_name): bool
    {

        return array_key_exists($table_name, $this->getData());
    }

    /**
     * Checks if index already exists in data
     * if it doesnt -  writes an array with index $table_name
     * and returns true
     *
     * @param string $table_name
     * @return bool
     */
    public function createTable(string $table_name): bool
    {
        if (!$this->tableExists($table_name)) {
            $this->data[$table_name] = [];

            return true;
        }

        return false;
    }

    /**
     * Delete array with index from data.
     *
     * @param string $table_name
     * @return bool
     */
    public function dropTable(string $table_name): bool
    {
        if ($this->tableExists($table_name)) {
            unset($this->data[$table_name]);

            return true;
        }

        return false;
    }

    /**
     * Empty data inside array, not removing the index
     *
     * @param string $table_name
     * @return bool
     */
    public function truncateTable(string $table_name): bool
    {
        if ($this->tableExists($table_name)) {
            $this->data[$table_name] = [];

            return true;
        }

        return false;
    }

    /**
     * Insert row(array) into created table
     *
     * @param string $table_name
     * @param array $row
     * @param string|null $row_id
     * @return false|int|string|null
     */
    public function insertRow(string $table_name, array $row, $row_id = null)
    {
        if (!$this->rowExists($table_name, $row_id)) {
            if ($row_id == null) {
                $this->data[$table_name][] = $row;
                $row_id = array_key_last($this->data[$table_name]);
            } else {
                $this->data[$table_name][$row_id] = $row;
            }

            return $row_id;
        }

        return false;
    }

    /**
     * Checks if row already exists in table.
     *
     * @param string $table_name
     * @param $row_id
     * @return bool
     */
    public function rowExists(string $table_name, $row_id): bool
    {
        return array_key_exists($row_id, $this->data[$table_name]);
    }

    /**
     * Update table row by selecting row_id
     *
     * @param string $table_name
     * @param $row_id
     * @param array $row
     * @return bool
     */
    public function updateRow(string $table_name, $row_id, array $row): bool
    {
        if ($this->rowExists($table_name, $row_id)) {
            $this->data[$table_name][$row_id] = $row;

            return true;
        }

        return false;
    }

    /**
     * Deletes row by its row_id
     *
     * @param string $table_name
     * @param $row_id
     * @return bool
     */
    public function deleteRow(string $table_name, $row_id): bool
    {
        if ($this->rowExists($table_name, $row_id)) {
            unset($this->data[$table_name][$row_id]);

            return true;
        }

        return false;
    }

    /**
     * Get row content by row_id
     *
     * @param string $table_name
     * @param $row_id
     * @return false|array
     */
    public function getRowById(string $table_name, $row_id)
    {
        if ($this->rowExists($table_name, $row_id)) {
            return $this->data[$table_name][$row_id];
        }

        return false;
    }

    /**
     *Returns rows array that have the conditions written in the function call.
     *
     * @param string $table_name
     * @param array $conditions
     * @return array
     */
    public function getRowsWhere(string $table_name, array $conditions = []): array
    {
        $found_array = [];

        foreach ($this->data[$table_name] as $row_id => $row) {
            $found = true;
            foreach ($conditions as $condition_key => $condition) {
                if ($row[$condition_key] !== $condition) {
                    $found = false;
                    break;
                }
            }

            if ($found) {
                $found_array[$row_id] = $row;
            }
        }

        return $found_array;
    }

    /**
     *Returns row array that have the conditions written in the function call.
     *
     * @param string $table_name
     * @param array $conditions
     * @return array|false
     */
    public function getRowWhere(string $table_name, array $conditions = [])
    {
        foreach ($this->data[$table_name] as $row_id => $row) {
            $found = true;
            foreach ($conditions as $condition_key => $condition) {
                if ($row[$condition_key] !== $condition) {
                    $found = false;
                    break;
                }
            }

            if ($found) {
                return $row;
            }
        }

        return false;
    }

}
