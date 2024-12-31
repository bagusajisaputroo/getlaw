<?php

namespace App\Filament\Resources;

use illuminate\Support\Str;
use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\Category;
use App\Models\News;
use Closure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\table;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->label('Judul'),
                    
                Forms\Components\Textarea::make('isi_berita')
                    ->required()
                    ->label('Isi Berita'),
                    
                    Forms\Components\FileUpload::make('gambar')
                    ->required()
                    ->label('Gambar')
                    ->directory('news') // Direktori tujuan
                    ->image()
                    ->preserveFilenames(), // Gunakan nama file asli
    
                Forms\Components\Select::make('category_id')
                    ->required()
                    ->label('Kategori')
                    ->options(Category::pluck('name', 'id')) // Sesuaikan dengan nama kategori
                    ->searchable(),
    
                Forms\Components\Select::make('status')
                    ->required()
                    ->label('Status')
                    ->options([
                        'success' => 'Success',
                        'pending' => 'Pending',
                        'failed' => 'Failed',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('judul')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('status')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('category.name')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            Tables\Columns\TextColumn::make('isi_berita')
                ->searchable()
                ->sortable()
                ->limit(50) // Batasi panjang karakter
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
