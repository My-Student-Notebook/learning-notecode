import java.util.*

fun main(args: Array<String>) {

    print("Digite um palpite: ");
    val palpite = readLine()?.toInt()!!;

    val random = Random();
    val dado = random.nextInt(6)+1;

    println("Palpite: $palpite");
    println("Dado: $dado");

    if(palpite == dado) {
        println("Você acertou.");
    } else {
        println("Você errou.");
    }

}
