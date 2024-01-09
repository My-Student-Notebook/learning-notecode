fun main(args: Array<String>) {

    // ? possivel converter
    // !! não será nulo
    println("Digite o valor de x:")
    val x = readLine()?.toInt()!!
    println("Digite o valor de y:")
    val y = readLine()?.toInt()!!
    val z = (x+y)

    println("$z")

}
