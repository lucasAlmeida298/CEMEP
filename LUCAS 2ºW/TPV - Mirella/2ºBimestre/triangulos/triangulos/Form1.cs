using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace triangulos
{
    public partial class Form : System.Windows.Forms.Form
    {
        public Form()
        {
            InitializeComponent();
        }

        private void btnS_Click(object sender, EventArgs e)
        {
            //declaração de variável da caixa de diálogo
            DialogResult result;
            result = MessageBox.Show("Deseja sair mesmo?", "Saída", MessageBoxButtons.YesNo, MessageBoxIcon.Warning);
            if(result==DialogResult.Yes)
            {
                Close();
            }
        }

        private void btnT_Click(object sender, EventArgs e)
        {
            //declarar variáveis

            double a, b, c;

            //conversão das variáveis

            a = Convert.ToDouble(txtLado1.Text);
            b = Convert.ToDouble(txtLado2.Text);
            c = Convert.ToDouble(txtLado3.Text);

            //lógica cálculo ver se é triângulo
                           // operador lógico E no C# é &&
                           // operador lógico OU no C# é ||
            // a<b+c
            // b<a+c
            // c<a+b

            if (a<b+c && b<a+c && c<a+b)
            {
                MessageBox.Show("Representam os lados de um triângulo", "Valores válidos", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            // Triângulo equilátero
        }

        private void btnL_Click(object sender, EventArgs e)
        {

        }
    }
}
