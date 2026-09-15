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
    public partial class frmSplash : Form
    {
        public frmSplash()
        {
            InitializeComponent();
        }

        private void frmSplash_Load(object sender, EventArgs e)
        {

        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void progressBar1_Click(object sender, EventArgs e)
        {

        }

        private void dateTimePicker1_ValueChanged(object sender, EventArgs e)
        {

        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            if(progressBar1.Value<100)
            {
                progressBar1.Value = progressBar1.Value + 5;
                lblTimer.Text = progressBar1.Value + "%";
            }
            else
            {
                //Instanciamento do objeto form
                frmLogin login = new frmLogin();
                //chamando para abrir o form salário bruto
                login.Show();
                //interromper o timer
                timer1.Stop();
                //esconder o splash
                this.Hide();
            }
        }
    }
}
