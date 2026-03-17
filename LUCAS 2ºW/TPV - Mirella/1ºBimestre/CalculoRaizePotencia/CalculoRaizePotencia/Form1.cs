using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CalculoRaizePotencia
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnCalcular_Click(object sender, EventArgs e)
        {
            double a, r, p;
            a = Convert.ToDouble(txtn1.Text);
            r = Math.Sqrt(a);
            txtR.Text = Convert.ToString(r);
            p = Math.Pow(a, 2);
            txtP.Text = Convert.ToString(p);
        }

        private void btnsair_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void btnlimpar_Click(object sender, EventArgs e)
        {
            txtn1.Clear();
            txtP.Clear();
            txtR.Clear();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}
