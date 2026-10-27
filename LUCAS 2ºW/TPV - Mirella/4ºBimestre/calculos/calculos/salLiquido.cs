using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace calculos
{
    public partial class salLiquido : Form
    {
        double salarioBase, aliquota, valorDep, bcir, irrf, salarioLiquido;
        int numDep;

        private void btnLimpar_Click(object sender, EventArgs e)
        {
            txtSalarioBase.Clear();
            txtNumDep.Clear();
            txtSalarioBase.Focus();
            txtDesc.Clear();
            lblValorDependentes.Hide();
            lblContInss.Hide();
            lblI.Hide();
            lblNumDep.Hide();
            lblIrrf.Hide();
            lblInss.Hide();
            lblValB.Hide();
            lblBcir.Hide();

        }

        private void lblDep_Click(object sender, EventArgs e)
        {

        }

        private void lblInss_Click(object sender, EventArgs e)
        {

        }

        public salLiquido(string salarioBase)
        {
            InitializeComponent();
            txtSalarioBase.Text = salarioBase;
            txtSalarioBase.Clear();
            txtNumDep.Clear();
            txtSalarioBase.Focus();
            txtDesc.Clear();
            lblValorDependentes.Hide();
            lblContInss.Hide();
            lblI.Hide();
            lblNumDep.Hide();
            lblIrrf.Hide();
            lblInss.Hide();
            lblValB.Hide();
            lblBcir.Hide();

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void label4_Click_1(object sender, EventArgs e)
        {

        }

        private void btnCalcular_Click(object sender, EventArgs e)
        {
            numDep = Convert.ToDouble(txtNumDep.Text);
            salarioBase = Convert.ToInt32(lbl)
            /*1.Dedução por Dependente
            Calcule o valor total da dedução multiplicando o número de dependentes pelo valor fixo
            mensal de R$189,59.*/
            lblValorDependentes = numDep * 189,59;


            /*2.Cálculo do INSS
            Calcule o desconto do INSS de forma simplificada por faixas utilizando o salário base,
            aplicando a alíquota e a respectiva parcela a deduzir:
            ● Até R$ 1.621,00: Alíquota de 7,5 % (sem dedução)
            ● De R$ 1.621,01 até R$ 2.836,34: Alíquota de 9 % e dedução de R$ 24,32
            ● De R$ 2.836,35 até R$ 4.254,51: Alíquota de 12 % e dedução de R$ 109,41
            ● De R$ 4.254,52 até R$ 8.475,55: Alíquota de 14 % e dedução de R$ 194,50
            ● Acima de R$ 8.475,55: Desconto fixado no teto de R$ 977,15*/

            /*3.Base de Cálculo do IRRF(BCIR)
              Determine a BCIR subtraindo o valor do INSS e a dedução total por dependentes do salário
              base:*/

            /*4.Cálculo Inicial do IRRF
            Aplique a tabela progressiva sobre a BCIR obtida no passo anterior:
            ● Até R$ 2.428,80: Isento(0 %)
            ● De R$ 2.428,81 até R$ 2.826,65: Alíquota de 7,5 % e dedução de R$ 182,16
            ● De R$ 2.826,66 até R$ 3.751,05: Alíquota de 15 % e dedução de R$ 394,16
            ● De R$ 3.751,06 até R$ 4.664,68: Alíquota de 22,5 % e dedução de R$ 675,49
            ● Acima de R$ 4.664,68: Alíquota de 27,5 % e dedução de R$ 908,73*/

            /*5.Aplicação da Regra de Redução do IRRF
            Por fim, ajuste o valor do IRRF aplicando um redutor baseado no salário base(bruto) do
            trabalhador:*/
        }
    }
}
