using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Lucas_Teorema
{
    public partial class frm1 : Form
    {
        public frm1()
        {
            InitializeComponent();
        }

        private void frm1_Load(object sender, EventArgs e)
        {

        }

        private void btnCalcular_Click(object sender, EventArgs e)
        {
            double a, b, c;
            a = Convert.ToDouble(txtN1.Text);
            b = Convert.ToDouble(txtN2.Text);
            c = Math.Sqrt(Math.Pow(a, 2) + Math.Pow(b, 2));
            txtResultado.Text = Convert.ToString(c);
       }

        private void lblResultado_Click(object sender, EventArgs e)
        {

        }

        private void btnSair_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void btnLimpar_Click(object sender, EventArgs e)
        {
            txtN1.Clear();
            txtN2.Clear();
            txtResultado.Clear();
            txtN1.Focus();
        }
    }
}
