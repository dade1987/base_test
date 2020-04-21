<?php

use Illuminate\Database\Schema\Blueprint;
//----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateCartItemsTable extends XotBaseMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->integer('cart_id');
                $table->integer('status')->nullable();
                $table->nullableMorphs('post');
                $table->integer('auth_user_id')->nullable();
                $table->text('note')->nullable();
                $table->integer('qty');
                $table->decimal('price', 10, 3);
                //$table->string('related_type', 50)->index()->nullable();//non serve in teoria
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            });
        }
        //-- UPDATE --
        $this->getConn()->table($this->getTable(), function (Blueprint $table) {
            if (! $this->hasColumn('cart_id')) {
                $table->integer('cart_id')->after('id')->nullable();
            }
            if (! $this->hasColumn('title')) {
                $table->string('title')->after('auth_user_id')->nullable();
                $table->string('subtitle')->after('title')->nullable();
                $table->integer('pivot_id')->nullable();
            }
        });
    }

    //end up
}//end class

