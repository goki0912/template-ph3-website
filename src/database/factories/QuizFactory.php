<?

namespace Database\Factories;

use App\Models\Quiz;
use illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{
  protected $model =Quiz::class;

  public function definition()
  {
    return[
      'name'=>$this->faker->sentence,
    ];
  }
}
