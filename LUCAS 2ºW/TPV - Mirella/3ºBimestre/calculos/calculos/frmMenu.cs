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
    public partial class frmMenu : Form
    {
        public frmMenu()
        {
            InitializeComponent();
        }

        private void toolStripLabel1_Click(object sender, EventArgs e)
        {
  
        }

        private void toolStripButton3_Click(object sender, EventArgs e)
        {

        }

        private void toolStripButton1_Click(object sender, EventArgs e)
        {
            DialogResult result;
            result = MessageBox.Show("Deseja sair do Sistema?", "Deslogando.",
                MessageBoxButtons.YesNo,
                MessageBoxIcon.Question);
            if (result == DialogResult.Yes)
            {
                Application.Exit();
            }

        }

        private void NotepadToolStrip_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("notepad.exe");
        }

        private void MenuToolStrip_Click(object sender, EventArgs e)
        {
            frmDesenvolvedor dev = new frmDesenvolvedor();
            dev.Show();
        }

        private void sairToolStripMenuItem_Click(object sender, EventArgs e)
        {
            DialogResult result;
            result = MessageBox.Show("Deseja sair do Sistema?", "Deslogando.",
                MessageBoxButtons.YesNo,
                MessageBoxIcon.Question);
            if (result == DialogResult.Yes)
            {
                Application.Exit();
            }

        }

        private void calculadoraToolStripMenuItem_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("calc.exe");
        }

        private void notepadToolStripMenuItem_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("notepad.exe");
        }

        private void googleToolStripMenuItem_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://www.google.com");
        }

        private void excelToolStripMenuItem_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("excel.exe");
        }

        private void salárioBrutoToolStripMenuItem_Click(object sender, EventArgs e)
        {
            salBruto sal = new salBruto();
            sal.Show();
        }

        private void desenvolvedorToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmDesenvolvedor dev = new frmDesenvolvedor();
            dev.Show();
        }

        private void sistemaToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Sistema sistema = new Sistema();
            sistema.Show();
        }

        private void toolStripStatusLabel2_Click(object sender, EventArgs e)
        {

        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            tssData.Text = DateTime.Now.ToLongDateString();
            tssHora.Text = DateTime.Now.ToShortTimeString();
        }
    }
}
