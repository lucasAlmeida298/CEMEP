
namespace calculos
{
    partial class salLiquido
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label2 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.txtSalarioBase = new System.Windows.Forms.TextBox();
            this.btnCalcular = new System.Windows.Forms.Button();
            this.txtNumDep = new System.Windows.Forms.TextBox();
            this.txtDesc = new System.Windows.Forms.TextBox();
            this.lblNumDep = new System.Windows.Forms.Label();
            this.lblContInss = new System.Windows.Forms.Label();
            this.lblI = new System.Windows.Forms.Label();
            this.lblValB = new System.Windows.Forms.Label();
            this.lblValorDependentes = new System.Windows.Forms.Label();
            this.btnLimpar = new System.Windows.Forms.Button();
            this.lblInss = new System.Windows.Forms.Label();
            this.lblIrrf = new System.Windows.Forms.Label();
            this.lblBcir = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Century Gothic", 36F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.DeepSkyBlue;
            this.label2.Location = new System.Drawing.Point(55, 21);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(673, 56);
            this.label2.TabIndex = 4;
            this.label2.Text = "Calculadora Salário Líquido";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.ForeColor = System.Drawing.Color.RoyalBlue;
            this.label5.Location = new System.Drawing.Point(33, 110);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(193, 25);
            this.label5.TabIndex = 17;
            this.label5.Text = "Salário Base (R$): ";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.RoyalBlue;
            this.label1.Location = new System.Drawing.Point(33, 149);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(280, 25);
            this.label1.TabIndex = 18;
            this.label1.Text = "Número de dependentes: ";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.ForeColor = System.Drawing.Color.RoyalBlue;
            this.label3.Location = new System.Drawing.Point(33, 188);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(344, 25);
            this.label3.TabIndex = 19;
            this.label3.Text = "Desconto em porcentagem (%): ";
            // 
            // txtSalarioBase
            // 
            this.txtSalarioBase.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtSalarioBase.Location = new System.Drawing.Point(220, 110);
            this.txtSalarioBase.Name = "txtSalarioBase";
            this.txtSalarioBase.Size = new System.Drawing.Size(392, 27);
            this.txtSalarioBase.TabIndex = 20;
            // 
            // btnCalcular
            // 
            this.btnCalcular.BackColor = System.Drawing.Color.DeepSkyBlue;
            this.btnCalcular.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnCalcular.ForeColor = System.Drawing.Color.Transparent;
            this.btnCalcular.Location = new System.Drawing.Point(112, 225);
            this.btnCalcular.Name = "btnCalcular";
            this.btnCalcular.Size = new System.Drawing.Size(576, 73);
            this.btnCalcular.TabIndex = 23;
            this.btnCalcular.Text = "Calcular";
            this.btnCalcular.UseVisualStyleBackColor = false;
            this.btnCalcular.Click += new System.EventHandler(this.btnCalcular_Click);
            // 
            // txtNumDep
            // 
            this.txtNumDep.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtNumDep.Location = new System.Drawing.Point(307, 149);
            this.txtNumDep.Name = "txtNumDep";
            this.txtNumDep.Size = new System.Drawing.Size(220, 27);
            this.txtNumDep.TabIndex = 24;
            // 
            // txtDesc
            // 
            this.txtDesc.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtDesc.Location = new System.Drawing.Point(371, 188);
            this.txtDesc.Name = "txtDesc";
            this.txtDesc.ReadOnly = true;
            this.txtDesc.Size = new System.Drawing.Size(156, 27);
            this.txtDesc.TabIndex = 25;
            // 
            // lblNumDep
            // 
            this.lblNumDep.AutoSize = true;
            this.lblNumDep.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblNumDep.Location = new System.Drawing.Point(33, 310);
            this.lblNumDep.Name = "lblNumDep";
            this.lblNumDep.Size = new System.Drawing.Size(367, 25);
            this.lblNumDep.TabIndex = 28;
            this.lblNumDep.Text = "Nº de Dependentes x R$189,59: R$ ";
            // 
            // lblContInss
            // 
            this.lblContInss.AutoSize = true;
            this.lblContInss.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblContInss.Location = new System.Drawing.Point(33, 344);
            this.lblContInss.Name = "lblContInss";
            this.lblContInss.Size = new System.Drawing.Size(236, 25);
            this.lblContInss.TabIndex = 29;
            this.lblContInss.Text = "Contribuição INSS: R$ ";
            this.lblContInss.Click += new System.EventHandler(this.label4_Click);
            // 
            // lblI
            // 
            this.lblI.AutoSize = true;
            this.lblI.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblI.Location = new System.Drawing.Point(34, 378);
            this.lblI.Name = "lblI";
            this.lblI.Size = new System.Drawing.Size(222, 25);
            this.lblI.TabIndex = 30;
            this.lblI.Text = "Desconto de IRRF: R$";
            this.lblI.Click += new System.EventHandler(this.label4_Click_1);
            // 
            // lblValB
            // 
            this.lblValB.AutoSize = true;
            this.lblValB.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblValB.Location = new System.Drawing.Point(524, 310);
            this.lblValB.Name = "lblValB";
            this.lblValB.Size = new System.Drawing.Size(154, 25);
            this.lblValB.TabIndex = 31;
            this.lblValB.Text = "Valor BCIR: R$";
            // 
            // lblValorDependentes
            // 
            this.lblValorDependentes.AutoSize = true;
            this.lblValorDependentes.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblValorDependentes.Location = new System.Drawing.Point(388, 310);
            this.lblValorDependentes.Name = "lblValorDependentes";
            this.lblValorDependentes.Size = new System.Drawing.Size(72, 25);
            this.lblValorDependentes.TabIndex = 32;
            this.lblValorDependentes.Text = " Valor";
            this.lblValorDependentes.Click += new System.EventHandler(this.lblDep_Click);
            // 
            // btnLimpar
            // 
            this.btnLimpar.BackColor = System.Drawing.Color.RoyalBlue;
            this.btnLimpar.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnLimpar.ForeColor = System.Drawing.Color.Transparent;
            this.btnLimpar.Location = new System.Drawing.Point(506, 404);
            this.btnLimpar.Name = "btnLimpar";
            this.btnLimpar.Size = new System.Drawing.Size(106, 34);
            this.btnLimpar.TabIndex = 33;
            this.btnLimpar.Text = "Limpar";
            this.btnLimpar.UseVisualStyleBackColor = false;
            this.btnLimpar.Click += new System.EventHandler(this.btnLimpar_Click);
            // 
            // lblInss
            // 
            this.lblInss.AutoSize = true;
            this.lblInss.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblInss.Location = new System.Drawing.Point(257, 344);
            this.lblInss.Name = "lblInss";
            this.lblInss.Size = new System.Drawing.Size(72, 25);
            this.lblInss.TabIndex = 34;
            this.lblInss.Text = " Valor";
            this.lblInss.Click += new System.EventHandler(this.lblInss_Click);
            // 
            // lblIrrf
            // 
            this.lblIrrf.AutoSize = true;
            this.lblIrrf.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblIrrf.Location = new System.Drawing.Point(257, 378);
            this.lblIrrf.Name = "lblIrrf";
            this.lblIrrf.Size = new System.Drawing.Size(72, 25);
            this.lblIrrf.TabIndex = 35;
            this.lblIrrf.Text = " Valor";
            // 
            // lblBcir
            // 
            this.lblBcir.AutoSize = true;
            this.lblBcir.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblBcir.Location = new System.Drawing.Point(674, 310);
            this.lblBcir.Name = "lblBcir";
            this.lblBcir.Size = new System.Drawing.Size(72, 25);
            this.lblBcir.TabIndex = 36;
            this.lblBcir.Text = " Valor";
            // 
            // salLiquido
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ControlLight;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.lblBcir);
            this.Controls.Add(this.lblIrrf);
            this.Controls.Add(this.lblInss);
            this.Controls.Add(this.btnLimpar);
            this.Controls.Add(this.lblValorDependentes);
            this.Controls.Add(this.lblValB);
            this.Controls.Add(this.lblI);
            this.Controls.Add(this.lblContInss);
            this.Controls.Add(this.lblNumDep);
            this.Controls.Add(this.txtDesc);
            this.Controls.Add(this.txtNumDep);
            this.Controls.Add(this.btnCalcular);
            this.Controls.Add(this.txtSalarioBase);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label2);
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "salLiquido";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Salário Líquido";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox txtSalarioBase;
        private System.Windows.Forms.Button btnCalcular;
        private System.Windows.Forms.TextBox txtNumDep;
        private System.Windows.Forms.TextBox txtDesc;
        private System.Windows.Forms.Label lblNumDep;
        private System.Windows.Forms.Label lblContInss;
        private System.Windows.Forms.Label lblI;
        private System.Windows.Forms.Label lblValB;
        private System.Windows.Forms.Label lblValorDependentes;
        private System.Windows.Forms.Button btnLimpar;
        private System.Windows.Forms.Label lblInss;
        private System.Windows.Forms.Label lblIrrf;
        private System.Windows.Forms.Label lblBcir;
    }
}