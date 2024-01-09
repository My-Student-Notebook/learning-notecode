fun main(args: Array<String>) {

    val idade = 19

    when(idade) {
        in 1..17 -> println("Criança")
        in 18..29 -> println("Jovem")
        in 30..60 -> println("Senhor")
        else -> println("Idoso ou Maior Idade")
    }

//
//    if (idade in 1..17) {
//        println("Criança")
//    } else if (idade in 18..29) {
//        println("Jovem")
//    } else if (idade in 30..60) {
//        println("Senhor")
//    }

}
