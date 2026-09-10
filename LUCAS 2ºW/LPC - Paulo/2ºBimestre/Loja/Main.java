public class Main {
    public static void main(String[] args) {
        Pedido obj1Pedido = new Pedido(453,"Paulo","Encomenda de cordas de baixo");
        obj1Pedido.setNomeCliente("João");
        obj1Pedido.setDescricaoPedido("Encomenda notebook lenovo");
        System.out.println(obj1Pedido.toString());

    }


}
