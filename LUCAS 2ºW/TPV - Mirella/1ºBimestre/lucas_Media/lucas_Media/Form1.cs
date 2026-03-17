using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace lucas_Media
{
    public partial class txtmedia : Form
    {
        public txtmedia()
        {
            InitializeComponent();
        }

        private void bntcalcular_Click(object sender, EventArgs e)
        {
            double n1, n2, r;
            n1 = Convert.ToDouble(txt1.Text);
            n2 = Convert.ToDouble(txt2.Text);
            r = (n1 + n2)/2;
            lblResultado.Text = Convert.ToString(Math.Round(r, 2));
        }

        private void btnlimpar_Click(object sender, EventArgs e)
        {
            txt1.Clear();
            txt2.Clear();
            lblResultado.Text = "";
            txt1.Focus();
        }

        private void btnsair_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void txtmedia_Load(object sender, EventArgs e)
        {

        }
    }
}
