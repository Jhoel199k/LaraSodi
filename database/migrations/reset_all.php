<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "Iniciando el proceso de migración...\n";

// Desactivar restricciones de clave foránea
Schema::disableForeignKeyConstraints();

// Array de migraciones en el orden correcto
$migrations = [
    '2024_09_03_151745_create_roles_table.php',
    '2024_09_03_151840_create_usuarios_table.php',
    '2024_09_03_151554_create_clientes_table.php',
    '2024_09_03_151733_create_proveedores_table.php',
    '2024_09_03_151530_create_articulos_table.php',
    '2024_09_03_151657_create_inventarios_table.php',
    '2024_09_03_151628_create_entradas_table.php',
    '2024_09_03_151817_create_salidas_table.php',
    '2024_09_03_151713_create_pedidos_table.php',
    '2024_09_03_151641_create_facturas_table.php',
    '2024_09_03_151853_create_ventas_table.php',
    '2024_09_03_151540_create_cajas_table.php',
    '2024_09_03_151608_create_consultas_table.php',
    '2024_09_03_151754_create_rutas_table.php',
];

// Ejecutar cada migración en orden
foreach ($migrations as $migration) {
    $path = database_path('migrations/' . $migration);
    if (!file_exists($path)) {
        echo "Advertencia: El archivo de migración no existe: $migration\n";
        continue;
    }
    
    try {
        echo "Migrando: $migration\n";
        Artisan::call('migrate', [
            '--path' => 'database/migrations/' . $migration,
            '--force' => true
        ]);
        echo Artisan::output();
    } catch (\Exception $e) {
        echo "Error al migrar $migration: " . $e->getMessage() . "\n";
        // Detener el proceso si hay un error
        exit(1);
    }
}

// Reactivar restricciones de clave foránea
Schema::enableForeignKeyConstraints();

echo "Proceso de migración completado exitosamente.\n";
//php database/migrations/reset_all.php