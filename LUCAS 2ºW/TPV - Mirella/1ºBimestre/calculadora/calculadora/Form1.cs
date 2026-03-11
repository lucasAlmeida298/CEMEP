using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace calculadora
{
    public partial class frmCalculadora : Form
    {
        public frmCalculadora()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            //declaração das variáveis
            int n1, n2, r;
            //conversão das variáveis
            n1 = Convert.ToInt32(txtn1.Text);
            n2 = Convert.ToInt32(txtn2.Text);
            //cálculo
            r = n1 / n2;
            //exibir o resultado
            lblResultado.Text = Convert.ToString(r);
        }

        private void label1_Click_1(object sender, EventArgs e)
        {

        }

        private void btnsair_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void label1_Click_2(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void btnsoma_Click(object sender, EventArgs e)
        {
            //declaração das variáveis
            int n1, n2, r;
            //conversão das variáveis
            n1 = Convert.ToInt32(txtn1.Text);
            n2 = Convert.ToInt32(txtn2.Text);
            //cálculo
            r = n1 + n2;
            //exibir o resultado
            lblResultado.Text = Convert.ToString(r);
        }

        private void frmCalculadora_Load(object sender, EventArgs e)
        {

        }

        private void btnsubtracao_Click(object sender, EventArgs e)
        {
            //declaração das variáveis
            int n1, n2, r;
            //conversão das variáveis
            n1 = Convert.ToInt32(txtn1.Text);
            n2 = Convert.ToInt32(txtn2.Text);
            //cálculo
            r = n1 - n2;
            //exibir o resultado
            lblResultado.Text = Convert.ToString(r);
        }

        private void btnmultiplicacao_Click(object sender, EventArgs e)
        {
            //declaração das variáveis
            int n1, n2, r;
            //conversão das variáveis
            n1 = Convert.ToInt32(txtn1.Text);
            n2 = Convert.ToInt32(txtn2.Text);
            //cálculo
            r = n1 * n2;
            //exibir o resultado
            lblResultado.Text = Convert.ToString(r);
        }

        private void btnlimpar_Click(object sender, EventArgs e)
        {
            txtn1.Clear();
            txtn2.Clear();
            lblResultado.Text = "";
            txtn1.Focus();
        }
    }
}
