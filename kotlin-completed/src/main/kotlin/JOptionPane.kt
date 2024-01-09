import javax.swing.JOptionPane

fun main(args: Array<String>) {

    // pede o nome do usuario por uma interface grafica
    val nome = JOptionPane.showInputDialog("Digite seu nome")

    // formata a mensagem de saida para o usuario
    val saida = String.format("%s %s", "Bem-Vindo", nome)

    // apresenta o texto em uma interface grafica
    JOptionPane.showMessageDialog(null, saida)

    //    println("Bem-Vindo $nome")

}
