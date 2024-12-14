<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    /**
     * Override the delete method to handle file deletion before the record is deleted.
     *
     * @param  \App\Models\Project  $record
     * @return void
     */
    public function delete($record): void
    {
        // Check if the project has an image associated with it
        if ($record->image) {
            // Attempt to delete the image from storage
            $imagePath = storage_path('storage/app/public/' . $record->image);

            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the file
            }
        }

        // Call the parent's delete method to remove the record
        parent::delete($record);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
