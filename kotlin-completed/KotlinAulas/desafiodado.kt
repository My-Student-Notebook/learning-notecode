import java.util.*

fun main(args: Array<String>) {

    print("Digite um palpite: ");
    val palpite = readLine()?.toInt()!!;

    val random = Random();
    val dado = random.nextInt(6)+1;

    println("Palpite: $palpite");
    println("Dado: $dado");

    when(palpite == dado) {
        true -> println("Você acertou.");
        false -> println("Você errou.");
    }

}
