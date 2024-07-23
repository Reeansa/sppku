<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class TahunAkademikMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'tahun_sekarang' => [
                'type' => 'VARCHAR',
                'constraint' => 4,
            ],
            'tahun_selanjutnya' => [
                'type' => 'VARCHAR',
                'constraint' => 4,
            ],
            'status_periode' => [
                'type' => 'ENUM',
                'constraint' => ['aktif', 'non-aktif'],
                'default' => 'aktif',
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],

        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tahun_akademik');
    }

    public function down()
    {
        $this->forge->dropTable('tahun_akademik');
    }
}
