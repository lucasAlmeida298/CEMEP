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
    public partial class frmLogin : Form
    {
        public frmLogin()
        {
            InitializeComponent();
        }

        private void frmLogin_Load(object sender, EventArgs e)
        {
            txtPassword.UseSystemPasswordChar = true;
        }

        private void btnSair_Click(object sender, EventArgs e)
        {
            Application.Exit(); // Fecha a aplicação com vários forms
        }

        private void checkSenha_CheckedChanged(object sender, EventArgs e)
        {


            if (checkSenha.Checked==true)
            {
                txtPassword.UseSystemPasswordChar = false;
            }
            else
            {
                txtPassword.UseSystemPasswordChar = true;
            }
        }

        private void btnLogin_Click(object sender, EventArgs e)
        {
            if (txtUsername.Text=="Lucas" && txtPassword.Text=="Mirella")
            {
                //Instanciamento do form menu
                frmMenu menu = new frmMenu();
                //Chamar form
                menu.Show();
            }
            else
            {
                MessageBox.Show("Usuário incorreto. Tente novamente mais tarde!");
                txtUsername.Clear();
                txtPassword.Clear();
                txtUsername.Focus();
            }
        }

        private void txtUsername_TextChanged(object sender, EventArgs e)
        {

        }

        private void txtPassword_TextChanged(object sender, EventArgs e)
        {

        }

        private void frmLogin_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (e.KeyChar == (char)13)
            {
                SendKeys.Send("{tab}");
            }
        }
    }
}
