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
    public partial class salBruto : Form
    {
        double horas, valorHora, salarioBruto;

        private void salBruto_Load(object sender, EventArgs e)
        {
            lblSal.Hide();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            salLiquido salMinimo = new salLiquido();
            salMinimo.Show();
            this.Hide();
        }

        private void btnLimpar_Click(object sender, EventArgs e)
        {
            txtHorasTrabalhadas.Clear();
            txtNomeFuncionario.Clear();
            txtValorHora.Clear();
            lblResultado.Hide();
            lblSal.Hide();
            txtNomeFuncionario.Focus();
        }

        private void txtHorasTrabalhadas_Leave(object sender, EventArgs e)
        {
            horas = Convert.ToDouble(txtHorasTrabalhadas.Text);
            if (horas<120 || horas>200)
            {
                MessageBox.Show("O campo deve estar entre 120 e 200 horas");
                txtHorasTrabalhadas.Clear();
                txtHorasTrabalhadas.Focus();
            }
        }

        public salBruto()
        {
            InitializeComponent();
        }

        private void btnCalcular_Click(object sender, EventArgs e)
        {
            try
            {
                horas = Convert.ToDouble(txtHorasTrabalhadas.Text);
                valorHora = Convert.ToDouble(txtValorHora.Text);

                salarioBruto = horas * valorHora;
                lblResultado.Text = salarioBruto.ToString();
                lblSal.Show();
                lblResultado.Show();
            }
            catch
            {
                MessageBox.Show("Por favor, digite apenas números válidos.",
                    "Erro de Entrada", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
    }
}
