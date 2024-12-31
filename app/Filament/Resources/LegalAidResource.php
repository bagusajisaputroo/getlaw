<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LegalAidResource\Pages;
use App\Models\LegalAid;
use App\Models\LegalAidRequest;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use fillament\Resources\Pages\ListRecords;

class LegalAidResource extends Resource
{
    protected static ?string $model = LegalAidRequest::class; // Pastikan modelnya benar

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->label('Phone')
                    ->required(),
                TextInput::make('address')
                    ->label('Address')
                    ->required(),
                TextInput::make('description')
                    ->label('Description')
                    ->required(),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'accepted' => 'Accepted',
                        'rejected' => 'Rejected',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('id')
                ->label('ID')
                ->sortable(),
            TextColumn::make('name')
                ->label('Name')
                ->searchable(),
            TextColumn::make('email')
                ->label('Email')
                ->searchable(),
            TextColumn::make('phone')
                ->label('Phone'),
            TextColumn::make('status')
                ->label('Status')
                ->formatStateUsing(function ($state) {
                    return match ($state) {
                        'pending' => 'Pending',
                        'accepted' => 'Accepted',
                        'rejected' => 'Rejected',
                        default => 'Unknown',
                    };
                }),
            TextColumn::make('created_at')
                ->label('Created At')
                ->dateTime(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
}


    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLegalAids::route('/'),
            'create' => Pages\CreateLegalAid::route('/create'),
            'edit' => Pages\EditLegalAid::route('/{record}/edit'),
        ];
    }
}
