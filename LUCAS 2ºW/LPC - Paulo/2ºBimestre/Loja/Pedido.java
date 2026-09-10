public class Pedido {
    private int codigoPedido;
    private String nomeCliente;
    private String descricaoPedido;

    public Pedido (int codigoPedido, String nomeCliente, String descricaoPedido){
        this.codigoPedido = codigoPedido;
        this.nomeCliente = nomeCliente;
        this.descricaoPedido = descricaoPedido;
    }

    @Override
    public String toString() {
        return "Nome do cliente: "+ this.nomeCliente + "\nDescrição do pedido: "+ this.descricaoPedido;
    }

    public void setCodigoPedido (int codigoPedido){
        this.codigoPedido=codigoPedido;
    }
    public void setDescricaoPedido (String descricaoPedido){
        this.descricaoPedido=descricaoPedido;
    }
    public void setNomeCliente (String nomeCliente){
        this.nomeCliente=nomeCliente;
    }
}
