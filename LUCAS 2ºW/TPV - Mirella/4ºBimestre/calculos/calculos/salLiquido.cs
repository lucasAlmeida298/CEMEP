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
        double salBase, numDependentes, valorDep;
        public salLiquido()
        {
            InitializeComponent();
            
        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void label4_Click_1(object sender, EventArgs e)
        {

        }

        private void btnCalcular_Click(object sender, EventArgs e)
        {
            try
            {
                salBase = Convert.ToDouble(txtSalarioBase.Text);
                numDependentes = Convert.ToDouble(txtNumDep);
                valorDep = numDependentes * 189.59;
                lblDep.Text = valorDep.ToString();
                
            }
            catch
            {
                MessageBox.Show("Por favor, digite apenas números válidos.",
                    "Erro de Entrada", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
    }
}
