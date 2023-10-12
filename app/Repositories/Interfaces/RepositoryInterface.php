<?php

namespace App\Repositories\Interfaces;

interface RepositoryInterface
{
    /**
     * Get all
     * @return mixed
     */
    public function getAll();

    /**
     * Find a record by its primary key.
     *
     * @param int $id The primary key value.
     * @return \Illuminate\Database\Eloquent\Model|null The found model or null if not found.
     */
    public function find($id);

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes = []);

    /**
     * Update a record by its primary key.
     *
     * @param int $id The primary key value.
     * @param array $attributes The data to update.
     * @return bool Whether the update was successful or not.
     */
    public function update($id, $attributes = []);

    /**
     * Delete a record by its primary key.
     *
     * @param int $id The primary key value.
     * @return bool True if the deletion was successful, false otherwise.
     */
    public function delete($id);
}
