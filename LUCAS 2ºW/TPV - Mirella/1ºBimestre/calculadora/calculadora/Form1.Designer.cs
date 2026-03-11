
namespace calculadora
{
    partial class frmCalculadora
    {
        /// <summary>
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Windows Form Designer

        /// <summary>
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmCalculadora));
            this.lbltexto1 = new System.Windows.Forms.Label();
            this.lbltexto2 = new System.Windows.Forms.Label();
            this.txtn1 = new System.Windows.Forms.TextBox();
            this.txtn2 = new System.Windows.Forms.TextBox();
            this.btnsoma = new System.Windows.Forms.Button();
            this.btndivisao = new System.Windows.Forms.Button();
            this.btnmultiplicacao = new System.Windows.Forms.Button();
            this.btnsubtracao = new System.Windows.Forms.Button();
            this.btnlimpar = new System.Windows.Forms.Button();
            this.btnsair = new System.Windows.Forms.Button();
            this.toolTip1 = new System.Windows.Forms.ToolTip(this.components);
            this.lblResultado = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // lbltexto1
            // 
            this.lbltexto1.AutoSize = true;
            this.lbltexto1.BackColor = System.Drawing.Color.DarkCyan;
            this.lbltexto1.Font = new System.Drawing.Font("Franklin Gothic Demi", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbltexto1.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.lbltexto1.Location = new System.Drawing.Point(39, 26);
            this.lbltexto1.Name = "lbltexto1";
            this.lbltexto1.Size = new System.Drawing.Size(206, 24);
            this.lbltexto1.TabIndex = 0;
            this.lbltexto1.Text = "Digite o primeiro valor: ";
            this.lbltexto1.Click += new System.EventHandler(this.label1_Click);
            // 
            // lbltexto2
            // 
            this.lbltexto2.AutoSize = true;
            this.lbltexto2.Font = new System.Drawing.Font("Franklin Gothic Demi", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbltexto2.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.lbltexto2.Location = new System.Drawing.Point(39, 64);
            this.lbltexto2.Name = "lbltexto2";
            this.lbltexto2.Size = new System.Drawing.Size(201, 24);
            this.lbltexto2.TabIndex = 1;
            this.lbltexto2.Text = "Digite o segundo valor:";
            this.lbltexto2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // txtn1
            // 
            this.txtn1.Font = new System.Drawing.Font("Franklin Gothic Medium Cond", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtn1.Location = new System.Drawing.Point(251, 26);
            this.txtn1.Name = "txtn1";
            this.txtn1.Size = new System.Drawing.Size(49, 29);
            this.txtn1.TabIndex = 2;
            // 
            // txtn2
            // 
            this.txtn2.Font = new System.Drawing.Font("Franklin Gothic Medium Cond", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtn2.Location = new System.Drawing.Point(251, 64);
            this.txtn2.Name = "txtn2";
            this.txtn2.Size = new System.Drawing.Size(49, 29);
            this.txtn2.TabIndex = 3;
            this.txtn2.TextAlign = System.Windows.Forms.HorizontalAlignment.Center;
            // 
            // btnsoma
            // 
            this.btnsoma.Image = ((System.Drawing.Image)(resources.GetObject("btnsoma.Image")));
            this.btnsoma.Location = new System.Drawing.Point(43, 119);
            this.btnsoma.Name = "btnsoma";
            this.btnsoma.Size = new System.Drawing.Size(52, 51);
            this.btnsoma.TabIndex = 4;
            this.toolTip1.SetToolTip(this.btnsoma, "Soma");
            this.btnsoma.UseVisualStyleBackColor = true;
            this.btnsoma.Click += new System.EventHandler(this.btnsoma_Click);
            // 
            // btndivisao
            // 
            this.btndivisao.Image = ((System.Drawing.Image)(resources.GetObject("btndivisao.Image")));
            this.btndivisao.Location = new System.Drawing.Point(248, 119);
            this.btndivisao.Name = "btndivisao";
            this.btndivisao.Size = new System.Drawing.Size(52, 51);
            this.btndivisao.TabIndex = 5;
            this.toolTip1.SetToolTip(this.btndivisao, "Divisão");
            this.btndivisao.UseVisualStyleBackColor = true;
            this.btndivisao.Click += new System.EventHandler(this.button2_Click);
            // 
            // btnmultiplicacao
            // 
            this.btnmultiplicacao.Image = ((System.Drawing.Image)(resources.GetObject("btnmultiplicacao.Image")));
            this.btnmultiplicacao.Location = new System.Drawing.Point(179, 119);
            this.btnmultiplicacao.Name = "btnmultiplicacao";
            this.btnmultiplicacao.Size = new System.Drawing.Size(52, 51);
            this.btnmultiplicacao.TabIndex = 6;
            this.toolTip1.SetToolTip(this.btnmultiplicacao, "Multiplicação");
            this.btnmultiplicacao.UseVisualStyleBackColor = true;
            this.btnmultiplicacao.Click += new System.EventHandler(this.btnmultiplicacao_Click);
            // 
            // btnsubtracao
            // 
            this.btnsubtracao.Image = ((System.Drawing.Image)(resources.GetObject("btnsubtracao.Image")));
            this.btnsubtracao.Location = new System.Drawing.Point(111, 119);
            this.btnsubtracao.Name = "btnsubtracao";
            this.btnsubtracao.Size = new System.Drawing.Size(52, 51);
            this.btnsubtracao.TabIndex = 7;
            this.toolTip1.SetToolTip(this.btnsubtracao, "Subtração");
            this.btnsubtracao.UseVisualStyleBackColor = true;
            this.btnsubtracao.Click += new System.EventHandler(this.btnsubtracao_Click);
            // 
            // btnlimpar
            // 
            this.btnlimpar.Image = ((System.Drawing.Image)(resources.GetObject("btnlimpar.Image")));
            this.btnlimpar.Location = new System.Drawing.Point(111, 191);
            this.btnlimpar.Name = "btnlimpar";
            this.btnlimpar.Size = new System.Drawing.Size(52, 51);
            this.btnlimpar.TabIndex = 8;
            this.toolTip1.SetToolTip(this.btnlimpar, "Limpar");
            this.btnlimpar.UseVisualStyleBackColor = true;
            this.btnlimpar.Click += new System.EventHandler(this.btnlimpar_Click);
            // 
            // btnsair
            // 
            this.btnsair.Image = ((System.Drawing.Image)(resources.GetObject("btnsair.Image")));
            this.btnsair.Location = new System.Drawing.Point(179, 191);
            this.btnsair.Name = "btnsair";
            this.btnsair.Size = new System.Drawing.Size(52, 51);
            this.btnsair.TabIndex = 9;
            this.toolTip1.SetToolTip(this.btnsair, "Sair");
            this.btnsair.UseVisualStyleBackColor = true;
            this.btnsair.Click += new System.EventHandler(this.btnsair_Click);
            // 
            // toolTip1
            // 
            this.toolTip1.ToolTipTitle = "Calculadora";
            // 
            // lblResultado
            // 
            this.lblResultado.AutoSize = true;
            this.lblResultado.Location = new System.Drawing.Point(144, 303);
            this.lblResultado.Name = "lblResultado";
            this.lblResultado.Size = new System.Drawing.Size(0, 13);
            this.lblResultado.TabIndex = 10;
            // 
            // frmCalculadora
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.DarkCyan;
            this.ClientSize = new System.Drawing.Size(335, 437);
            this.Controls.Add(this.lblResultado);
            this.Controls.Add(this.btnsair);
            this.Controls.Add(this.btnlimpar);
            this.Controls.Add(this.btnsubtracao);
            this.Controls.Add(this.btnmultiplicacao);
            this.Controls.Add(this.btndivisao);
            this.Controls.Add(this.btnsoma);
            this.Controls.Add(this.txtn2);
            this.Controls.Add(this.txtn1);
            this.Controls.Add(this.lbltexto2);
            this.Controls.Add(this.lbltexto1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.SizableToolWindow;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "frmCalculadora";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = " ";
            this.Load += new System.EventHandler(this.frmCalculadora_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lbltexto1;
        private System.Windows.Forms.Label lbltexto2;
        private System.Windows.Forms.TextBox txtn1;
        private System.Windows.Forms.TextBox txtn2;
        private System.Windows.Forms.Button btnsoma;
        private System.Windows.Forms.Button btndivisao;
        private System.Windows.Forms.Button btnmultiplicacao;
        private System.Windows.Forms.Button btnsubtracao;
        private System.Windows.Forms.Button btnlimpar;
        private System.Windows.Forms.Button btnsair;
        private System.Windows.Forms.ToolTip toolTip1;
        private System.Windows.Forms.Label lblResultado;
    }
}

