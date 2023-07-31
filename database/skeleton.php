Schema::create('users', function (Blueprint $table) {
$table->bigIncrements('user_id');
$table->unsignedBigInteger('role_id')->nullable(); // Foreign key column for role_id, nullable
$table->string('name');
$table->integer('age');
$table->decimal('salary', 10, 2);
$table->boolean('is_admin')->default(false);
$table->date('birthdate');
$table->dateTime('last_login')->nullable();
$table->enum('gender', ['male', 'female', 'other']);
$table->text('bio')->nullable();
$table->json('meta_data');

$table->timestamps(); // Adds 'created_at' and 'updated_at' columns (timestamp data type)
$table->softDeletes(); // Adds 'deleted_at' column (timestamp data type)
});